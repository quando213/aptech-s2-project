<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Combo;
use App\Models\Product;
use Illuminate\Http\Request;

class ComboController extends Controller
{

    public function index()
    {
        return '';
    }


    public function create()
    {
        $product = Product::query()->orderBy('name','asc')->get();
        return view('Admin.Combo.form',[
            'title'=>'Combos',
            'breadcrumb'=>'Create Combo',
            'data'=>null,
            'product'=>$product
        ]);
    }


    public function store(Request $request)
    {
      return $request;
    }


    public function show(Combo $combo)
    {
        //
    }


    public function edit(Combo $combo)
    {
        //
    }


    public function update(Request $request, Combo $combo)
    {
        //
    }


    public function destroy(Combo $combo)
    {
        //
    }
}
