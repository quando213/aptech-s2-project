<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $limit = $request->query('limit') ?? 25;

        $data = Category::query();
        $data = buildQuery($request, $data);
        if ($search && strlen($search)) {
            $data = $data->where(function (Builder $q) use ($search) {
                return $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
                    ->orWhere('id', 'like', '%' . $search . '%');
            });
        }

        return view('Admin.Category.list', [
            'data' => $data->paginate($limit)
        ]);

    }

    public function create()
    {
        return view('Admin.Category.form');
    }

    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->fill($request->validated());
        $category->save();
        return redirect()->route('categoryList')->with('message', 'Thêm mới thành công danh mục ' . $category->name);
    }

    public function save(CategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->validated());
        $category->save();
        return redirect()->route('categoryList')->with('message', 'Sửa thành công danh mục ' . $category->name);
    }

    public function update($id)
    {
        $data = Category::find($id);
        return view('Admin.Category.form', [
            'data' => $data
        ]);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categoryList')->with('message', 'Xóa thành công danh mục ' . $category->name);
    }
}
