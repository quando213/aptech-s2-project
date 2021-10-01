<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientProductController extends Controller
{
    public function list(Request $request)
    {
        $query_builder = Product::query();
        $search = $request->query('search');
        $category_id = $request->query('category_id');
        $price_min = $request->query('price_min');
        $price_max = $request->query('price_max');
        $sort_attr = $request->query('sort_attr');
        $sort_order = $request->query('sort_order');
        if ($search) {
            $query_builder = $query_builder->where('name', 'like', '%' . $search . '%');
        }
        if ($category_id) {
            $query_builder = $query_builder->where('category_id', $category_id);
        }
        if ($price_min) {
            $query_builder = $query_builder->where('price', '>=', $price_min);
        }
        if ($price_max) {
            $query_builder = $query_builder->where('price', '<=', $price_max);
        }
        if ($sort_attr) {
            $query_builder = $query_builder->orderBy($sort_attr, $sort_order ?? 'ASC');
        }
        return view('Client/product', [
                'list' => $query_builder->paginate(24),
                'search' => $search,
                'category_id' => $category_id,
                'price_min' => $price_min,
                'price_max' => $price_max,
                'sort' => $sort_attr ? $sort_attr . ' ' . ($sort_order ?? 'ASC') : null,
            ]
        );
    }

    public function detail($id)
    {
        $product = Product::query()->where('id', $id)->firstOrFail();
        $related_products = Product::query()
            ->where('category_id', $product->category_id)
            ->where('stock', '>', 0)
            ->where('id', '<>', $id)
            ->limit(10)
            ->get();
        return view('Client.product-detail', [
            'product' => $product,
            'related_products' => $related_products
        ]);
    }
}
