<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class TemplateClientController extends Controller
{
    public function index()
    {
        return view('.Client.layout.index');
    }

    public function home()
    {
        $category = Category::all();
        return view('.Client.home', ["category" => $category]);
    }


    public function blog()
    {
        return view('.Client.blog-simple-sidebar-left');
    }

    public function contact()
    {
        return view('.Client.contact');
    }

    public function product_default($id)
    {
        $product = Product::findOrFail($id);
        return view('Client.product-single-default', ["product" => $product]);
    }

    public function product_left()
    {
        return view('.Client.product-single-tab-left');
    }

    public function shop_layout_with()
    {
        $data = Product::all();
        return view('.Client.shop-sidebar-full-width', compact('data'));
    }

    public function shop_layout_left()
    {
        return view('.Client.shop-sidebar-grid-left');
    }

    public function cart()
    {
        if (Session::has('accountLogin')){
            if (Session::get('accountLogin')){
                return view('.Client.cart');
            }
        }
        return redirect('/login');
    }

    public function login()
    {
        return view('.Client.login');
    }

    public function account()
    {
        return view('.Client.my-account');
    }

    public function about()
    {
        return view('.Client.about');
    }

    public function frequently()
    {
        return view('.Client.frequently-questions');
    }

    public function privacy_policy()
    {
        return view('.Client.privacy-policy');
    }

    public function wishlist()
    {
        return view('.Client.wishlist');
    }

    public function emply_cart()
    {
        return view('.Client.emply-cart');
    }

    public function checkout()
    {
        return view('.Client.checkout');
    }

    public function compare()
    {
        return view('.Client.compare');
    }

    public function blog2()
    {
        return view('.Client.blog-list-sidebar-left');
    }
}
