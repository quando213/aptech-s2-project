<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Combo;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientHomeController extends Controller
{
    public function list() {
        $product = Product::all();
        $combo = Combo::all();
        return view('Client/home', ['list' => $product], ['combo' => $combo]);
    }
}
