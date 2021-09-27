<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Group;
use App\Models\Product;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = Product::find($request->input('product_id'));
        $quantity = $request->input('quantity');
        Cart::add($product->id, $product->name, $quantity, $product->price, 100, ['thumbnail' => $product->thumbnail]);
        return response()->json([
            'code' => 200,
            'message' => 'Sản phẩm đã được thêm vào giỏ hàng!',
            'product' => $product,
            'total' => Cart::total(),
            'count' => Cart::count(),
            'content' => Cart::content()
        ]);
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect()->route('viewCart');
    }

    public function destroy()
    {
        Cart::destroy();
        return redirect()->route('viewCart');
    }

    public function view()
    {
        return view('.Client.cart');
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
}
