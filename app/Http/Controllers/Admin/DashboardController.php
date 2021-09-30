<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Group;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data['user'] = sizeof(User::all());
        $data['product'] = sizeof(Product::all());
        $data['group'] = sizeof(Group::all());
        $data['order'] = sizeof(Order::all());

        return view('.Admin.Dashboard.index', [
            'data' => $data
        ]);
    }

    public function chartOrderQuantity(Request $request)
    {
        $start = Carbon::parse($request->start);
        $end = Carbon::parse($request->end);
        $diff = $end->diffInDays($start);
        $dates = [];
        $quantities = [];

        for ($i = $diff; $i >= 0; $i--) {
            $date = date_format(Carbon::parse($request->end)->addDays(-($i)), 'Y-m-d');
            $orders = Order::query()->whereDate('created_at', '=', date_format(Carbon::parse($request->end)->addDays(-($i)), 'Y-m-d'))->get();
            array_push($quantities, sizeof($orders));
            array_push($dates, $date);
        }
        $data['dates'] = $dates;
        $data['quantities'] = $quantities;
        return $data;
    }

    public function chartRevenue(Request $request)
    {
        $start = Carbon::parse($request->start);
        $end = Carbon::parse($request->end);
        $diff = $end->diffInDays($start);
        $dates = [];
        $revenues = [];
        for ($i = $diff; $i >= 0; $i--) {
            $date = date_format(Carbon::parse($request->end)->addDays(-($i)), 'Y-m-d');
            $revenue = Order::query()
                ->whereDate('created_at', '=', date_format(Carbon::parse($request->end)
                    ->addDays(-($i)), 'Y-m-d'))->sum('total_price');
            array_push($dates, $date);
            array_push($revenues, $revenue);
        }
        $data['dates'] = $dates;
        $data['revenues'] = $revenues;
        return $data;
    }


    public function chartCategory(Request $request)
    {
        $start = Carbon::parse($request->start);
        $end = Carbon::parse($request->end);
        $queryBuilder = DB::table('order_details')
            ->select('categories.id as category_id', DB::raw('count(order_details.id) as count'), 'categories.name as category_name')
            ->join('products', 'products.id', '=', 'order_details.product_id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->join('orders', 'orders.id', '=', 'order_details.order_id')
            ->where('orders.status', '=', OrderStatus::COMPLETED)
            ->whereNull('order_details.deleted_at')
            ->whereNull('orders.deleted_at')
            ->groupBy('categories.id', 'categories.name')
            ->orderBy('count', 'DESC');
        if ($start) {
            $queryBuilder = $queryBuilder->whereDate('order_details.created_at', '>=', $start);
        }
        if ($end) {
            $queryBuilder = $queryBuilder->whereDate('order_details.created_at', '<=', $end);
        }
        $results = $queryBuilder->get()->toArray();
        $categories = array_column($results, 'category_name');
        $category_ids = array_column($results, 'category_id');
        $counts = array_column($results, 'count');
        return ['categories' => $categories, 'category_ids' => $category_ids, 'counts' => $counts];
    }
}
