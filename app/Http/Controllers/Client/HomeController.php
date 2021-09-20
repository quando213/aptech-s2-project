<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
//        $products = Product::query()->paginate(10);
        $products1 = Product::query()->where('category_id', 1)->get();
        $products2 = Product::query()->where('category_id', 2)->get();
        $products3 = Product::query()->where('category_id', 3)->get();
        $category = Category::all();
        return view('.Client.home', [
//            'products' => $products,
            'products1' => $products1,
            'products2' => $products2,
            'products3' => $products3,
            'categories' => $category,
        ]);
    }

}
