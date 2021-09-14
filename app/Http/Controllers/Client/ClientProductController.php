<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientProductController extends Controller
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

}
