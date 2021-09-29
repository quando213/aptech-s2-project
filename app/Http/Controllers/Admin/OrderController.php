<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\District;
use App\Models\Group;
use App\Models\Notification;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use App\Models\Ward;
use Gloudemans\Shoppingcart\Facades\Cart;

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

        return view('Admin.Order.list', [
            'data' => $data->paginate($limit),
            'districts' => District::query()->orderBy('name')->get(),
            'wards' => $district_id ? Ward::query()->where('district_id', $district_id)->orderBy('name')->get() : []
        ]);
    }

    public function test()
    {
        $cart = Cart::content();
        $lists = Product::all();
        return view('test_order', [
            'lists' => $lists,
            'cart' => $cart
        ]);
    }

    public function detail()
    {
        return view('list');
    }

    public function buynow(Request $request)
    {
        $order = new Order();
        $order->total_price = Cart::total();
        $floatVar = floatval(preg_replace("/[^-0-9\.]/", "", Cart::total()));
        $order->user_id = Auth::id();
        $order->shipping_name = $request->shipping_name;
        $order->shipping_district_id = $request->shipping_district_id;
        $order->shipping_ward_id = $request->shipping_ward_id;
        $order->shipping_street = $request->shipping_street;
        $order->shipping_phone = $request->shipping_phone;
        $order->shipper_id = null;
        $order->payment_method = false;
        $order->status = OrderStatus::CREATED;
        $order->save();
        foreach (Cart::content() as $item) {
            $product = Product::find($item->id);
            $product->update([
                'stock' => $product->stock - $item->qty
            ]);
            $product->save();
            $order_detail = new Orderdetail();
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $item->id;
            $order_detail->unit_price = $item->subtotal();
            $order_detail->quantity = $item->qty;
            $order_detail->save();
        }

        $this->sendNotification($order);
        Cart::destroy();
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "https://sem2-project.herokuapp.com/response";
        $vnp_TmnCode = "OV95A0Y9";
        $vnp_HashSecret = "ZGZKUWRMIPLAZFFGCMMRDRTQUKFOMGLS";
        $vnp_TxnRef = $order->id;
        $vnp_OrderInfo = "Thanh toan don hang ";
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $floatVar * 100;
        $vnp_Locale = "vn";
        $vnp_BankCode = $request->bankcode;
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );
        if (isset($vnp_BankCode) && $vnp_BankCode != null) {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
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

    public function testIpn($id)
    {
        $order = Order::find($id);
        return $order;
    }

    public function orderDetail($id)
    {
        $order = Order::query()->where('id', $id)->with(['district', 'ward', 'user'])->orderBy('created_at', 'desc')->first();
        $groupShipper = Group::query()->where('ward_id', $order->shipping_ward_id)->first();
        if ($groupShipper) {
            $shippers = User::query()->where(['group_id' => $groupShipper->id, 'role' => UserRole::SHIPPER])->get();
        } else {
            $shippers = null;
        }
        $orderDetails = OrderDetail::query()->where(['order_id' => $id, 'created_at' => $order->created_at])->with(['product'])->get();
        return view('Admin.Order.detail', [
            'shippers' => $shippers,
            'title' => 'Trang chi tiết đơn hàng',
            'breadcrumb' => 'Hiện thị chi tiết đơn hàng',
            'orderDetails' => $orderDetails,
            'order' => $order,
            'categories' => Category::all()
        ]);
    }

    public function save(Request $request, $id)
    {
        $notification = new Notification();
        $notification->sender_id = $request->shipper_id;
        $notification->link = "/shipper/notification/";
        $notification->message = "ban nhân đươc 1 đơn hàng giao đến ";
        $order = Order::find($id);
        $order->status = $request->status;
        $order->payment_method = $request->payment_method;
        $order->save();
        $this->sendNotification($order);
        return redirect()->route('orderList');
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


    public function sendNotification($order)
    {
        $notification = new Notification();
        $notification->sender_id = $order->user_id;
        $notification->link = "/myOrder/" . $order->id;
        switch ($order->status) {
            case 1:
                $notification->message = "Chúng tôi đã ghi nhân đặt hàng của bạn với giá trị: " . $order->total_price . "<br> đơn hàng đang đươc xủ lý xin cảm ơn";
                break;
            case 2:
                $notification->message = "đơn hàng của bạn đã được nhân bởi: ";//.$order->shipper->name."";
                break;
            case 3:
                $notification->message = "đơn hàng chuẩn bi đươc giao bởi: ";//.$order->shipper->name."vui lòng gữi điên thoại"." ".$order->shipping_phone;
                break;
            case 4:
                $notification->message = "đơn hàng của bạn đã được giao bởi: ";//.$order->shipper->name."mọi ý kiển góp ý và thắng mắc và góp ý xin vui lòng liên hệ :0929427881";
                break;
            case 5:
                $notification->message = "đơn hàng của bạn đã bị huy do: ";//.$order->shipper->name."";
                break;
        }
        $notification->save();
    }

}
