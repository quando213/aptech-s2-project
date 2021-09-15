<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientProductController extends Controller
{
    public function list() {
        $product = Product::all();
        $categori = Category::all();
        return view('Client/shop-sidebar-grid-left', ['list' => $product], ['categori' => $categori]);
    }
}
