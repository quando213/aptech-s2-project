<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientProductController extends Controller
{
    public function list(){
        $datas = Product::query()->orderBy('created_at',"desc")->get();
        return view('Client.shop-sidebar-full-width',[
            'data'=>$datas
        ]);
    }
    public function detail($id){
        $datas = Product::find($id);
        return view('Client.product-single-default',[
            'product'=>$datas
        ]);
    }
}
