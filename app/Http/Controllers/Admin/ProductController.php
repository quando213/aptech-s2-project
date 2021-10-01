<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $limit = $request->query('limit') ?? 25;
        $stock = $request->query('stock');

        $data = Product::query()->with(['category']);
        $data = buildQuery($request, $data, ['category_id']);
        if ($search && strlen($search)) {
            $data = $data->where(function (Builder $q) use ($search) {
                return $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
                    ->orWhere('origin', 'like', '%' . $search . '%')
                    ->orWhere('brand', 'like', '%' . $search . '%')
                    ->orWhere('id', 'like', '%' . $search . '%');
            });
        }
        if ($stock != null) {
            $data = $data->where('stock', $stock == 0 ? '=' : '>', 0);
        }

        return view('Admin.Product.list', [
            'data' => $data->paginate($limit)
        ]);
    }

    public function create()
    {
        $categories = Category::query()->orderBy('name')->get();
        return view('Admin.Product.form', [
            'categories' => $categories
        ]);
    }


    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->fill($request->validated());
        $product->save();
        return redirect()->route('productList')
            ->with('message', 'Tao mới thành công sản phẩm ' . $product->name);
    }

    public function save(ProductRequest $request, $id)
    {
        $product = Product::query()->where('id', $id)->firstOrFail();
        $product->update($request->validated());
        $product->save();
        return redirect()->route('productList')
            ->with('message', 'Sửa thành công sản phẩm ' . $product->name);
    }


    public function update($id)
    {
        $data = Product::query()->where('id', $id)->firstOrFail();
        $categories = Category::query()->orderBy('name')->get();
        return view('Admin.Product.form', [
            'categories' => $categories,
            'data' => $data
        ]);
    }

    public function destroy($id)
    {
        $product = Product::query()->where('id', $id)->firstOrFail();
        $product->delete();
        return redirect()->route('productList')->with('message', 'Xóa thành công sản phẩm ' . $product->name);
    }

    public function apiCheck($id)
    {
        $product = Product::query()->where('id', $id)->firstOrFail();
        return $product;
    }
}
