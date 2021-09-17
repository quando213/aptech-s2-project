<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Group;
use App\Models\Notification;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use PayPal\Api\Payer;

class  OrderController extends Controller
{
    public function addToCart(Request $request,$id)
    {
        $product = Product::find($id);
        $floatVar = (float)$product->price;
        Cart::add($product->id, $product->name , $request->quantity , $floatVar, 100, ['thumbnail' => $product->thumbnail]);
    }

    public function index()
    {
        return view('Admin.Order.list', [
            'title' => 'Product',
            'breadcrumb' => 'Edit Product',
            'data' => ''
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

    public function update(Request $request)
    {
        $row = Cart::get($request->rowId);

        if ($row->qty < 100 && $request->qty < 100) {
            Cart::update($request->rowId, $row->qty = $request->qty);
        } else {
            return redirect('/cart')->with('message', 'lỗi');
        }
        return redirect('/cart');
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect('/cart');
    }
    public function destroy(){
        Cart::destroy();
        return redirect('/cart');
    }


    public function checkout(){
        $districts = District::query()->orderBy('name', 'asc')->get();
        $data = User::query()->where('id', Auth::user()->id)->with(['district','ward','group'])->first();
        return view('.Client.checkout',[
            'districts'=>$districts,
            'data'=>$data

        ]);
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
        $order->status = OrderStatus::Create;
        $order->save();
        foreach (Cart::content() as $item) {
            $product = Product::find($item->id);
            $product->update([
                'stock'=> $product->stock - $item->qty
            ]);
            $product->save();
            $order_detail = new Orderdetail();
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $item->id;
            $order_detail->unit_price = $item->subtotal();
            $order_detail->quantity = $item->qty;
            $order_detail->save();
        }
        $notification = new Notification();
        $notification->sender_id = Auth::id();
        $notification->link = "/myorder/".$order->id;
        $notification->message = "Chúng tôi đã ghi nhân đặt hàng của bạn với giá trị: ".Cart::total() ."<br> đơn hàng đang đươc xủ lý xin cảm ơn";
        $notification->save();


        $group = Group::query()->where('ward_id',$order->shipping_ward_id)->first();

       if ($group != null){
           $shippers = User::query()->where(['group_id'=>$group->id,'role'=>3])->get();
           foreach ($shippers as $shipper){
               $notification = new Notification();
               $notification->sender_id = $shipper->id;
               $notification->link = "/admin/orders/".$order->id;
               $notification->message = "đơ vị của bạn vưa nhân đươc 1 đơn hàng mới";
               $notification->save();
           }
       }

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
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }

    public function response(Request $request)
    {

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
                        if ($order->payment_method != NULL && $order->payment_method == 0) {
                            if ($request->vnp_ResponseCode == '00' || $request->vnp_TransactionStatus == '00') {
                                $order->update(['payment_method' => true]);
                                $order->save();
                                $notification = new Notification();
                                $notification->sender_id = $order->user_id;
                                $notification->link = "/myorder/".$order->id;
                                $notification->message = "Đơn hàng của bạn đã được xác nhân thanh toán với giá trị: ".$order->total_price."đơn hàng sẽ được giao trong thời gian sớm nhất";
                                $notification->save();
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

    public function list(){
        $data = Order::query()->with(['district','ward','user'])->orderBy('created_at','desc')->get();
        return view('Admin.Order.list',[
            'data'=>$data,
            'title'=>'Trang đơn hàng',
            'breadcrumb'=>'Hiện thị đơn hàng'
        ]);
    }
    public function orderDetail($id){
        $order = Order::query()->where('id',$id)->with(['district','ward','user'])->orderBy('created_at','desc')->first();
        $orderDetails = OrderDetail::query()->where(['order_id'=>$id,'created_at'=>$order->created_at])->with(['product'])->get();
        return view('Admin.Order.detail',[
            'title'=>'Trang chi tiết đơn hàng',
            'breadcrumb'=>'Hiện thị chi tiết đơn hàng',
            'orderDetails'=>$orderDetails,
            'order'=>$order
        ]);
    }
    public function save(Request $request,$id){
        $order = Order::find($id);
        $order->status = $request->status;
        $order->payment_method = $request->payment_method;
        $order->save();
        return redirect()->route('orderList');
    }


}
