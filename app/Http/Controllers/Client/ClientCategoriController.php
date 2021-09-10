<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ClientCategoriController extends Controller
{
    public function list() {
        $categoi = Category::all();
        return view('Client/header', ['list' => $categoi]);
    }
}
