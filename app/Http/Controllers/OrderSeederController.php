<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use App\Models\Ward;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class OrderSeederController extends Controller
{
    public function addCart()
    {
        Cart::destroy();
        for ($i = 1; $i <= 10; $i++) {
            $random = random_int(30, 80);
            $randomUser = random_int(9, 70);
            $randomDistrict = random_int(1, 30);
            $randomQuantity = random_int(1, 10);
            for ($h = 100; $h >= 0; $h--){
                for ($j = 1; $j <= random_int(2, 5); $j++) {
                    $product = Product::find($random);
                    $quantity = $randomQuantity;
                    Cart::add($product->id, $product->name, $quantity, $product->price, 100, ['thumbnail' => $product->thumbnail]);
                }
                $time = Carbon::now('Asia/Ho_Chi_Minh')->addDays(-($i));
                $order = new Order();
                $order->shipping_name = User::find($randomUser)->first_name . "" . User::find($randomUser)->last_name;
                $order->shipping_phone = '0' . random_int(310000000, 999999999);
                $order->paid_at = $time;
                $order->created_at = $time;
                $order->updated_at = $time;
                $order->shipping_district_id = $randomDistrict;
                $order->shipping_ward_id = (Ward::query()->where('district_id', $randomDistrict)->first())->id;
                $order->shipping_street = "số nhà " . $i . "  " . (Ward::query()->where('district_id', $randomDistrict)->with('district')->first())->name . " " . (Ward::query()->where('district_id', $randomDistrict)->with('district')->first())->district->name;
                $order->shipper_id = random_int(71, 1000);;
                $order->total_price = floatval(Cart::total(0, '', ''));
                $order->user_id = $randomUser;
                $order->status = OrderStatus::COMPLETED;
                $order->payment_method = 1;

                $order->save();
                foreach (Cart::content() as $item) {
                    $order_detail = new OrderDetail();
                    $order_detail->order_id = $order->id;
                    $order_detail->product_id = $item->id;
                    $order_detail->unit_price = floatval($item->subtotal(0, '', ''));
                    $order_detail->quantity = $item->qty;
                    $order_detail->save();
                }
                $random = random_int(30, 80);
                $randomUser = random_int(9, 70);
                $randomDistrict = random_int(1, 30);
                $randomQuantity = random_int(1, 10);
                for ($j = 1; $j <= random_int(2, 5); $j++) {
                    $product = Product::find($random);
                    $quantity = $randomQuantity;
                    Cart::add($product->id, $product->name, $quantity, $product->price, 100, ['thumbnail' => $product->thumbnail]);
                }
                $order = new Order();
                $order->shipping_name = User::find($randomUser)->first_name . "" . User::find($randomUser)->last_name;
                $order->shipping_phone = '0' . random_int(310000000, 999999999);
                $order->paid_at = $time->hours(-3);
                $order->created_at = $time->hours(-3);
                $order->updated_at = $time->hours(-3);
                $order->shipping_district_id = $randomDistrict;
                $order->shipping_ward_id = (Ward::query()->where('district_id', $randomDistrict)->first())->id;
                $order->shipping_street = "số nhà " . $i . "  " . (Ward::query()->where('district_id', $randomDistrict)->with('district')->first())->name . " " . (Ward::query()->where('district_id', $randomDistrict)->with('district')->first())->district->name;
                $order->shipper_id = random_int(71, 1000);;
                $order->total_price = floatval(Cart::total(0, '', ''));
                $order->user_id = $randomUser;
                $order->status = OrderStatus::COMPLETED;
                $order->payment_method = 1;

                $order->save();
                foreach (Cart::content() as $item) {
                    $order_detail = new OrderDetail();
                    $order_detail->order_id = $order->id;
                    $order_detail->product_id = $item->id;
                    $order_detail->unit_price = floatval($item->subtotal(0, '', ''));
                    $order_detail->quantity = $item->qty;
                    $order_detail->save();
                }
            }
        }
    }
}
