<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ComboController;

use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\CheckShipper;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/', [DashboardController::class, 'index'])->name('adminDashboard');
Route::get('/test-chart', [DashboardController::class, 'chartOrderQuantity'])->name('chartOrderQuantity');
Route::get('/chartOrderPrice', [DashboardController::class, 'chartRevenue'])->name('chartRevenue');
Route::get('/chartCategory', [DashboardController::class, 'chartCategory'])->name('chartCategory');

Route::prefix('orders')->group(function () {
    Route::get('', [OrderController::class, 'list'])->name('orderList');
    Route::get('paid/{id}', [OrderController::class, 'markAsPaid'])->middleware([CheckAdmin::class])->name('orderMarkAsPaid');
    Route::prefix('ship')->middleware(CheckShipper::class)->group(function () {
        Route::get('start/{id}', [OrderController::class, 'markAsShipped'])->name('orderMarkAsShipped');
        Route::get('finish/{id}', [OrderController::class, 'markAsCompleted'])->name('orderMarkAsCompleted');
        Route::get('cancel/{id}', [OrderController::class, 'cancelShipment'])->name('orderCancelShipment');
    });
    Route::get('mine', [OrderController::class, 'list'])->middleware(CheckShipper::class)->name('myShipments');
    Route::get('{id}', [OrderController::class, 'detail'])->name('orderDetail');
    Route::post('{id}', [OrderController::class, 'save'])->middleware(CheckAdmin::class);
});

Route::prefix('/users')->middleware([CheckAdmin::class])->group(function () {
    Route::get('create', [AdminUserController::class, 'create'])->name('userCreate');
    Route::post('create', [AdminUserController::class, 'store']);
    Route::get('update/{id}', [AdminUserController::class, 'update'])->name('userUpdate');
    Route::post('update/{id}', [AdminUserController::class, 'save']);
    Route::get('delete/{id}', [AdminUserController::class, 'destroy'])->name('userDelete');
    Route::get('{role?}', [AdminUserController::class, 'index'])->name('userList');
});

Route::prefix('/groups')->middleware([CheckAdmin::class])->group(function () {
    Route::get('', [GroupController::class, 'index'])->name('groupList');
    Route::get('create', [GroupController::class, 'create'])->name('groupCreate');
    Route::post('create', [GroupController::class, 'store']);
    Route::get('update/{id}', [GroupController::class, 'update'])->name('groupUpdate');
    Route::post('update/{id}', [GroupController::class, 'save']);
    Route::get('delete/{id}', [GroupController::class, 'destroy'])->name('groupDelete');
});

Route::prefix('/categories')->middleware([CheckAdmin::class])->group(function () {
    Route::get('', [CategoryController::class, 'index'])->name('categoryList');
    Route::get('create', [CategoryController::class, 'create'])->name('categoryCreate');
    Route::post('create', [CategoryController::class, 'store']);
    Route::get('update/{id}', [CategoryController::class, 'update'])->name('categoryUpdate');
    Route::post('update/{id}', [CategoryController::class, 'save']);
    Route::get('delete/{id}', [CategoryController::class, 'destroy'])->name('categoryDelete');
});

Route::prefix('/products')->middleware([CheckAdmin::class])->group(function () {
    Route::get('', [ProductController::class, 'index'])->name('productList');
    Route::get('create', [ProductController::class, 'create'])->name('productCreate');
    Route::post('create', [ProductController::class, 'store']);
    Route::get('update/{id}', [ProductController::class, 'update'])->name('productUpdate');
    Route::post('update/{id}', [ProductController::class, 'save']);
    Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('productDelete');
});

Route::prefix('/combos')->middleware([CheckAdmin::class])->group(function () {
    Route::get('', [ComboController::class, 'index'])->name('comboList');
    Route::get('detail', [ComboController::class, 'detail'])->name('comboDetail');
    Route::get('create', [ComboController::class, 'create'])->name('comboCreate');
    Route::post('create', [ComboController::class, 'store']);
    Route::get('update/{id}', [ComboController::class, 'update'])->name('comboUpdate');
    Route::post('update/{id}', [ComboController::class, 'save']);
    Route::get('delete/{id}', [ComboController::class, 'destroy'])->name('comboDelete');
});

Route::prefix('/me')->group(function () {
    Route::get('profile', [AdminUserController::class, 'detailShipper'])->name('detailShipper');
    Route::get('group', [AdminUserController::class, 'detailGroup'])->name('detailGroup');
});


