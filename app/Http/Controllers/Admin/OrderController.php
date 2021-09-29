<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderPaymentMethod;
use App\Enums\OrderStatus;
use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\District;
use App\Models\Group;
use App\Models\Notification;
use App\Models\Order;
use App\Models\User;
use App\Models\Ward;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;


class  OrderController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->query('search');
        $limit = $request->query('limit') ?? 50;
        $start_date = $request->query('start_date');
        $end_date = $request->query('end_date');
        $district_id = $request->query('shipping_district_id');

        $data = Order::query()->with(['district', 'ward', 'user']);
        $data = buildQuery($request, $data, ['shipping_district_id', 'shipping_ward_id', 'status']);
        if ($search && strlen($search)) {
            $data = $data->where(function (Builder $q) use ($search) {
                return $q->where('shipping_name', 'like', '%' . $search . '%')
                    ->orWhere('shipping_street', 'like', '%' . $search . '%')
                    ->orWhere('shipping_phone', 'like', '%' . $search . '%')
                    ->orWhereHas('district', function ($q) use ($search) {
                        return $q->where('name', 'like', '%' . $search . '%');
                    })
                    ->orWhereHas('ward', function ($q) use ($search) {
                        return $q->where('name', 'like', '%' . $search . '%');
                    })
                    ->orWhere('id', 'like', '%' . $search . '%');
            });
        }
        if ($start_date) {
            $data = $data->whereDate('created_at', '>=', $start_date);
        }
        if ($end_date) {
            $data = $data->whereDate('created_at', '<=', $end_date);
        }

        $user = Auth::user();
        if ($user->role == UserRole::SHIPPER) {
            $data = $data->where('shipping_ward_id', $user->group->ward_id)->where('status', '>', OrderStatus::CREATED);
        }

        return view('Admin.Order.list', [
            'data' => $data->paginate($limit),
            'districts' => District::query()->orderBy('name')->get(),
            'wards' => $district_id ? Ward::query()->where('district_id', $district_id)->orderBy('name')->get() : []
        ]);
    }

    public function detail($id)
    {
        $order = Order::find($id);
        $shippers = User::query()->where('role', UserRole::SHIPPER)
            ->whereHas('group', function ($q) use ($order) {
                return $q->where('ward_id', $order->shipping_ward_id);
            })->get();
        return view('Admin.Order.detail', [
            'shippers' => $shippers,
            'order' => $order
        ]);
    }

    public function save(UpdateOrderRequest $request, $id)
    {
        $data = $request->validated();
        $order = Order::find($id);
        if ($data['status'] != $order->status) {
            notifyOrderStatusUpdate($id);
        }
        $order->fill($data);
        $order->save();
        return redirect()->route('orderList')->with('message', 'Cập nhật thành công đơn hàng #' . $id);
    }

    public function markAsPaid($id)
    {
        $order = Order::find($id);
        if ($order['status'] != OrderStatus::CREATED)
        {
            return redirect()->back()->withErrors(['msg' => 'Lỗi! Đơn hàng đã ở trạng thái hoàn tất thanh toán']);
        }
        $order->status = OrderStatus::PAID;
        $order->payment_method = OrderPaymentMethod::BANK_TRANSFER;
        $order->paid_at = Carbon::now();
        $order->save();
        notifyOrderStatusUpdate($id);
        return redirect()->route('orderList')->with('message', 'Cập nhật thành công đơn hàng #' . $id);
    }

    public function response(Request $request)
    {
//        $order = Order::find($request->vnp_TxnRef);
//
//        $group = Group::query()->where('ward_id',$order->shipping_ward_id)->first();
//        if ($group != null){
//            $shippers = User::query()->where(['group_id'=>$group->id,'role'=>3])->get();
//            foreach ($shippers as $shipper){
//                $notification = new Notification();
//                $notification->sender_id = $shipper->id;
//                $notification->link = "/admin/orders/".$order->id;
//                $notification->message = "đơ vị của bạn vưa nhân đươc 1 đơn hàng mới";
//                $notification->save();
//            }
//        }
//        else{
//
//        }
    }


    public function ipnResponse(Request $request)
    {
        Log::debug('An informational message.');
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_HashSecret = "ZGZKUWRMIPLAZFFGCMMRDRTQUKFOMGLS";
        $inputData = array();
        $returnData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }

        $vnp_SecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }
        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        $vnp_Amount = $inputData['vnp_Amount'] / 100;
        $order = Order::find($request->vnp_TxnRef);
        $floatVar = floatval(preg_replace("/[^-0-9\.]/", "", $order->total_price));
        try {
            if ($secureHash === $vnp_SecureHash) {
                if ($order != NULL) {
                    if ($floatVar == $vnp_Amount) {
                        if ($order->payment_method == 0) {
                            if ($request->vnp_ResponseCode == '00' || $request->vnp_TransactionStatus == '00') {
                                $shipper = $this->rollShipper($order);
                                $order->update([
                                    'payment_method' => true,
                                    'shipper_id' => $shipper
                                ]);
                                $order->save();
                                $returnData['RspCode'] = '00';
                                $returnData['Message'] = 'Confirm Success';
                                return $returnData;
                            } else {
                                $Status = 2;
                            }
                        } else {
                            $returnData['RspCode'] = '02';
                            $returnData['Message'] = 'Order already confirmed';
                            return $returnData;
                        }
                    } else {
                        $returnData['RspCode'] = '04';
                        $returnData['Message'] = 'invalid amount';
                        return $returnData;
                    }
                } else {
                    $returnData['RspCode'] = '01';
                    $returnData['Message'] = 'Order not found';
                    return $returnData;
                }
            } else {
                $returnData['RspCode'] = '97';
                $returnData['Message'] = 'Invalid signature';
                return $returnData;
            }
        } catch (Exception $e) {
            $returnData['RspCode'] = '99';
            $returnData['Message'] = 'Unknow error';
        }
    }

    public function rollShipper($order)
    {
        $array = array();
        $count = array();
        $group = Group::query()->where('ward_id', $order->shipping_ward_id)->with('user')->first();
        if ($group) {
            foreach ($group->user as $item) {
                $user = Order::query()->where('shipper_id', $item->id)->get();
                $data = [
                    'id' => $item->id,
                    'count' => sizeof($user)
                ];
                array_push($array, $data);
                array_push($count, sizeof($user));
            }
        }
        foreach ($array as $item) {
            if ($item['count'] == min($count)) {
                $user = User::find($item['id']);
                $notification = new Notification();
                $notification->sender_id = $item['id'];
                $notification->link = "/shipper/order/" . $order->id;
                $notification->message = "ban nhân đươc 1 đơn mới";
                $notification->save();
                $to_name = $user->first_name . ' ' . $user->last_name;
                $user_email = $user->email;
                Mail::send('mails.demo_mail', ['order' => $order, $user], function ($message) use ($to_name, $user_email) {
                    $message->to($user_email, $to_name)
                        ->subject('HNFOOD Mail');
                    $message->from(env('MAIL_USERNAME'), 'HNFOOD');
                });
                return $item['id'];
            };
        }
    }
}
