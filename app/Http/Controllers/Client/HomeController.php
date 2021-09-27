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
        $products1 = Product::query()->where('category_id', 1)->get();
        $products2 = Product::query()->where('category_id', 2)->get();
        $products3 = Product::query()->where('category_id', 3)->get();
        $products4 = Product::query()->where('category_id', 4)->get();
        $category = Category::all();
        return view('.Client.home', [
            'products1' => $products1,
            'products2' => $products2,
            'products3' => $products3,
            'products4' => $products4,
            'categories' => $category,
        ]);
    }
    public function list(Request $request){
        $list = Product::query()->paginate(30);
        return view('Client.product',[
            'list'=>$list
        ]);
    }
    public function detail($id){
        $product =Product::query()->where('id',$id)->with('category')->first();
        return view('Client.product-detail',[
            'product'=>$product
        ]);
    }
    public function search(Request $request){

        $list = Product::query()->where([['name','like', '%'.$request->header_search.'%']])->with('category')->get();
        return view('Client.product',[
            'list'=>$list
        ]);
    }
    public function category($id){
        $list = Product::query()->where('category_id', $id)->with('category')->get();
        return view('Client.product',[
            'list'=>$list
        ]);
    }
    public function cart(){
        return view('Client.cart');
    }

}
