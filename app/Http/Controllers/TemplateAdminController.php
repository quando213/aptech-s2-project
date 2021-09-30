<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TemplateAdminController extends Controller
{
    public function index()
    {
        return view('.Admin.layout.index');
    }

    public function page_content()
    {
        $times = [];
        $total_order = [];
        for ($i = 6; $i >= 0; $i--) {
            $time = date_format(Carbon::now('Asia/Ho_Chi_Minh')->addDays(-($i)), 'd-m');
            $order = Order::query()->whereDate('created_at', '=',date_format(Carbon::now('Asia/Ho_Chi_Minh')->addDays(-($i)), 'Y-m-d'))->get();
            array_push($total_order,sizeof($order));
            array_push($times,$time);
        }
        $data['time'] = $times;
        $data['orders'] = $total_order;
        $data['user'] = sizeof(User::all());
        $data['product'] = sizeof(Product::all());
        $data['group'] = sizeof(Group::all());
        $data['order'] = sizeof(Order::all());

        return view('.Admin.page-content',[
            'data'=>$data
        ]);
    }

    public function form_layout()
    {
        return view('.Admin.form-layout');
    }
    public function input()
    {
        return view('.Admin.input');
    }
    public function table()
    {
        return view('.Admin.table');
    }
    public function datatable()
    {
        return view('.Admin.datatable');
    }
    public function email()
    {
        return view('.Admin.email');
    }
    public function login()
    {
        return view('.Admin.login');
    }
    public function sign_in()
    {
        return view('.Admin.regitter');
    }
    public function forgot()
    {
        return view('.Admin.forgot');
    }
    public function createProduct()
    {
        return view('.Admin.product.form');
    }
    public function listProduct()
    {
        return view('.Admin.product.list');
    }
}
