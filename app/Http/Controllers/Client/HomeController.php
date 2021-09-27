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
        $categories = Category::query()->with('products')->get();
        return view('.Client.home', [
            'featured_categories' => $categories,
        ]);
    }
}
