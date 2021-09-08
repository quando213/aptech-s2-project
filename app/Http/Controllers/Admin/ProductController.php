<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductPostRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $data = Product::query()->with(['category'])->orderBy('created_at','desc')->get();
        return view('Admin.Product.list',[
            'data'=>$data,
            'title'=>'Trang sản phẩm',
            'breadcrumb'=>'Hiển thị các sản phẩm'
        ]);
    }


    public function create()
    {
        $categories = Category::query()->orderBy('name','asc')->get();
        return view('Admin.Product.form',[
            'categories'=>$categories,
            'data'=>null,
            'title'=>'Trang thêm mới sản phẩm',
            'breadcrumb'=>'Tạo mới sản phẩm'
        ]);
    }


    public function store(ProductPostRequest $request)
    {
        $product = new Product();
        $img = $request['thumbnail'];
        $check = explode('.', $img);
        $size = sizeof($check) - 1;

        if ($check[$size] == 'jpg' || $check[$size] == 'png'|| $check[$size] == 'jpeg') {
            $product->fill($request->validated());
            $product->save();
            return redirect()->route('productList')->with('message','Tao mới thành công sản phẩm dùng '.$product->name);
        }
        else{
            return redirect()->route('productCreate')->with('error','image format error, accepted formats .jpg .png .jpeg');
        }

    }
    public function save(ProductPostRequest $request, $id)
    {
        $product = Product::find($id);
        $img = $request['thumbnail'];
        $check = explode('.', $img);
        $size = sizeof($check) - 1;

        if ($check[$size] == 'jpg' || $check[$size] == 'png'|| $check[$size] == 'jpeg') {
            $product->update($request->validated());
            $product->save();
            return redirect()->route('productList')->with('message','Sửa thành công sản phẩm dùng '.$product->name);
        }
        else{
            return redirect()->route('productUpdate',$id)->with('error','image format error, accepted formats .jpg .png .jpeg');
        }
    }


    public function update($id)
    {
        $data = Product::find($id);
        $categories = Category::query()->orderBy('name','asc')->get();
        return view('Admin.Product.form',[
            'categories'=>$categories,
            'data'=>$data,
            'title'=>'Product',
            'breadcrumb'=>'Edit Product'
        ]);
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('productList')->with('message','Xóa thành công sản phẩm dùng '.$product->name);
    }
    public function apiCheck($id)
    {
        $product = Product::find($id);
        return $product;
    }
}
