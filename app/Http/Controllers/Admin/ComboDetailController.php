<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ComboDetail;
use Illuminate\Http\Request;

class ComboDetailController extends Controller
{

    public function index()
    {
        return view('Admin.ComboDetail.list',[
            'title' => 'Combos',
            'breadcrumb' => 'Create Combo',
        ]);
    }
}
