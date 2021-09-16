<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientProductDetailController extends Controller
{
    public function list()
    {
        return "";
    }
    public function detail($id)
    {
        $product = Product::find($id);
        return view('Client.product-detail', [
            'product' => $product
        ]);
    }
//    public function  getProductCategory($id){
//        $categoryId = $id;
//        return view('Client/home',['products'=>Product::all()->where('category_id', $categoryId)]);
//
//
//    }

}
