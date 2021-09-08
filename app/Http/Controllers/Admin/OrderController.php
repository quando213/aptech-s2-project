<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use PayPal\Api\Payer;

class  OrderController extends Controller
{
    public function addToCart($id)
    {
        $product = Product::find($id);
        $floatVar = (float)$product->price;
        Cart::add($product->id, $product->name, 1, $floatVar, 100, ['thumbnail' => $product->thumbnail]);
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

        if ($row->qty < 100 && $request->qty < 100){
            Cart::update($request->rowId,$row->qty = $request->qty);
        }
        else{
            return redirect('/test/order')->with('message','lỗi');
        }
        return redirect('/test/order');
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect('/test/order');
    }
    public function buynow()
    {
        $order = new Order();
        $order->total_price = Cart::total();
        $order->user_id = 1;
        $order->shipping_name = 'Nguyễn Ngọc Thuận';
        $order->shipping_district_id = 1;
        $order->shipping_ward_id = 1;
        $order->shipping_street = 'Số nhà 14 ngách 28 ngõ 52 đường Mỹ Đình';
        $order->shipping_phone = '0929427881';
        $order->shipper_id = 1;
        $order->payment_method = false;
        $order->created_at = Carbon::now();
        $order->updated_at = Carbon::now();
        $order->status = 1;
        $order->save();
        foreach (Cart::content() as $item) {
            $order_detail = new Orderdetail();
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $item->id;
            $order_detail->unit_price = $item->subtotal();
            $order_detail->quantity = $item->qty;
            $order_detail->save();
        }
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        foreach (Cart::content() as $item) {
            $item1 = new \PayPal\Api\Item();
            $item1->setName($item->name);
            $item1->setCurrency('VND');
            $item1->setName($item->name);
            $item1->setName($item->name);
        }






        return $order .  '       '. $order_detail;




    }


}
