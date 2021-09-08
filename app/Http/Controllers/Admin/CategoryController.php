<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryPostRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::query()->orderBy('created_at','desc')->get();
        return view('Admin.Category.list',[
            'data'=>$data,
            'title'=>'Trang thể loại sản phẩm',
            'breadcrumb'=>'Hiện thị thể loại sản phẩm'
        ]);

    }
    public function create()
    {
        return view('Admin.Category.form',[
            'data'=>null,
            'title'=>'Trang thêm mới thể loại sản phẩm',
            'breadcrumb'=>'Tạo mới thể loại sản phẩm'
        ]);
    }

    public function store(CategoryPostRequest $request)
    {
        $category = new Category();
        $category->fill($request->validated());
        $category->save();
        return redirect()->route('categoryList')->with('message','Thêm mới thành công category '.$category->name);
    }



    public function save(CategoryPostRequest $request,$id)
    {
        $category = Category::find($id);
        $category->update($request->validated());
        $category->save();
        return redirect()->route('categoryList')->with('message','Sửa thành công category '.$category->name);
    }


    public function update($id)
    {
        $data = Category::find($id);
        return view('Admin.Category.form',[
            'data'=>$data,
            'title'=>'Category',
            'breadcrumb'=>'Edit Category'
        ]);
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categoryList')->with('message','Xóa thành công category '.$category->name);
    }
}
