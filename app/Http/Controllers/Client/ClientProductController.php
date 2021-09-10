<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientProductController extends Controller
{
    public function detail($id){
        $data = Product::find($id);
        return view('Client.product-single-default',[
            'data'=>$data
        ]);
    }
}
