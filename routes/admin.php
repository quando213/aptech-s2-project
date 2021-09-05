<?php


use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\WardController;
use App\Http\Controllers\TemplateAdminController;
use App\Http\Controllers\TemplateClientController;
use App\Http\Controllers\Admin\ComboController;
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


Route::get('/', [TemplateAdminController::class, 'page_content']);


Route::prefix('/users')->group(function () {
    Route::get('', [AdminUserController::class, 'index'])->name('userList');
    Route::get('create', [AdminUserController::class, 'create'])->name('userCreate');
    Route::post('create', [AdminUserController::class, 'store']);
    Route::get('update/{id}', [AdminUserController::class, 'update'])->name('userUpdate');
    Route::post('update/{id}', [AdminUserController::class, 'save']);
    Route::get('delete/{id}', [AdminUserController::class, 'destroy'])->name('userDelete');
});
// phân quản lý group trang admin
Route::prefix('/groups')->group(function () {
    Route::get('', [GroupController::class, 'index'])->name('groupList');
    Route::get('create', [GroupController::class, 'create'])->name('groupCreate');
    Route::post('create', [GroupController::class, 'store']);
    Route::get('update/{id}', [GroupController::class, 'update'])->name('groupUpdate');
    Route::post('update/{id}', [GroupController::class, 'save']);
    Route::get('delete/{id}', [GroupController::class, 'destroy'])->name('groupDelete');
});
// phân quản lý category trang admin
Route::prefix('/categories')->group(function () {
    Route::get('', [CategoryController::class, 'index'])->name('categoryList');
    Route::get('create', [CategoryController::class, 'create'])->name('categoryCreate');
    Route::post('create', [CategoryController::class, 'store']);
    Route::get('update/{id}', [CategoryController::class, 'update'])->name('categoryUpdate');
    Route::post('update/{id}', [CategoryController::class, 'save']);
    Route::get('delete/{id}', [CategoryController::class, 'destroy'])->name('categoryDelete');
});
// phân quản lý product trang admin
Route::prefix('/products')->group(function () {
    Route::get('', [ProductController::class, 'index'])->name('productList');
    Route::get('create', [ProductController::class, 'create'])->name('productCreate');
    Route::post('create', [ProductController::class, 'store']);
    Route::get('update/{id}', [ProductController::class, 'update'])->name('productUpdate');
    Route::post('update/{id}', [ProductController::class, 'save']);
    Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('productDelete');
});

Route::prefix('/combos')->group(function () {
    Route::get('', [ComboController::class, 'index'])->name('comboList');
    Route::get('create', [ComboController::class, 'create'])->name('');
    Route::post('create', [ComboController::class, 'store']);
    Route::get('update/{id}', [ComboController::class, 'update'])->name('');
    Route::post('update/{id}', [ComboController::class, 'save']);
    Route::get('delete/{id}', [ComboController::class, 'destroy'])->name('');
});



