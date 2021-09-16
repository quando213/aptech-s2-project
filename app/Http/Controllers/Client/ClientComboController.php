<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Combo;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientComboController extends Controller
{
    public function list() {
        $combo = Combo::all();
        $categori = Category::all();
        return view('Client/shop-sidebar-grid-left', ['list' => $combo], ['categori' => $categori]);
    }
}
