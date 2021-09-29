<?php


use App\Enums\UserRole;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\WardController;
use App\Http\Controllers\TemplateAdminController;
use App\Http\Controllers\TemplateClientController;
use App\Http\Controllers\Admin\ComboController;
use App\Http\Middleware\CheckAdmin;
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


Route::get('/', [TemplateAdminController::class, 'page_content'])->name('adminDashboard');

Route::prefix('orders')->group(function () {
    Route::get('', [OrderController::class, 'list'])->name('orderList');
    Route::get('/paid/{id}', [OrderController::class, 'markAsPaid'])->name('orderMarkedAsPaid');
    Route::get('/{id}', [OrderController::class, 'detail'])->name('orderDetail');
    Route::post('/{id}', [OrderController::class, 'save']);
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

Route::prefix('/shipper')->group(function () {
//    Route::get('', [OrderController::class, 'list'])->name('orderList');
//    Route::get('/{id}', [OrderController::class, 'orderDetail'])->name('orderDetail');
    Route::get('/personnel', [GroupController::class, 'personnel']);
});




