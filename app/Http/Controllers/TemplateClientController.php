<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateClientController extends Controller
{
    public function index()
    {
        return view('.Client.layout.index');
    }

    public function home()
    {
        return view('.Client.home');
    }


    public function blog()
    {
        return view('.Client.blog-simple-sidebar-left');
    }

    public function contact()
    {
        return view('.Client.contact');
    }

    public function product_default()
    {
        return view('.Client.product-single-default');
    }

    public function product_left()
    {
        return view('.Client.product-single-tab-left');
    }

    public function shop_layout_with()
    {
        return view('.Client.shop-sidebar-full-width');
    }

    public function shop_layout_left()
    {
        return view('.Client.shop-sidebar-grid-left');
    }

    public function cart()
    {
        return view('.Client.cart');
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
