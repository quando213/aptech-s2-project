<?php

namespace App\Http\Controllers\Client;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\PlaceOrderRequest;
use App\Models\District;
use App\Models\Group;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $districts = District::query()->orderBy('name')->get();
        $data = User::query()->where('id', Auth::user()->id)->with(['district', 'ward', 'group'])->first();
        $group = Group::query()->where('ward_id', $data->ward_id)->with('ward')->first();
        return view('.Client.checkout', [
            'districts' => $districts,
            'data' => $data,
            'group' => $group
        ]);
    }

    public function placeOrder(PlaceOrderRequest $request)
    {
        $data = $request->validated();
        $data['total_price'] = floatval(Cart::total(0, '', ''));
        $data['user_id'] = Auth::id();
        $data['status'] = OrderStatus::CREATED;
        $order = new Order();
        $order->fill($data);
        $order->save();
        foreach (Cart::content() as $item) {
            $product = Product::find($item->id);
            if ($product->stock < $item->qty) {
                $order->delete();
                return back()->withInput()
                    ->with('message', 'Một trong số các sản phẩm trong giỏ hàng của bạn không còn đủ số lượng.');
            }
            $product->decrement('stock', $item->qty);
            $product->save();
            $order_detail = new OrderDetail();
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $item->id;
            $order_detail->unit_price = floatval($item->subtotal(0, '', ''));
            $order_detail->quantity = $item->qty;
            $order_detail->save();
        }
        Cart::destroy();
        notifyOrderStatusUpdate($order->id);
        return redirect()->route('myOrderDetail', ['id' => $order->id]);
    }

    public function makeVNPayPayment($order_id)
    {
        $order = Order::query()->where(['id' => $order_id, 'status' => OrderStatus::CREATED])->firstOrFail();
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "https://sem2-project.herokuapp.com/response";
        $vnp_TmnCode = "OV95A0Y9";
        $vnp_HashSecret = "ZGZKUWRMIPLAZFFGCMMRDRTQUKFOMGLS";
        $vnp_TxnRef = $order_id;
        $vnp_OrderInfo = "Thanh toán đơn hàng Đi Chợ Hộ #" . $order_id;
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $order->total_price * 100;
        $vnp_Locale = "vn";
        $vnp_BankCode = null;
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
}
