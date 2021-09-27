<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\WardController;
use App\Http\Controllers\Client\ClientComboController;
use App\Http\Controllers\Client\ClientProductController;
use App\Http\Controllers\Client\ClientProductDetailController;
use App\Http\Controllers\Client\EntryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\TemplateAdminController;
use App\Http\Controllers\TemplateClientController;
use App\Http\Middleware\checkAdmin;
use App\Http\Middleware\checkShipper;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->middleware(['auth', CheckAdmin::class])->group(function () {
    require_once __DIR__ . '/admin.php';
});
//Route::get('insert', require_once __DIR__ . '/insert_data.php');

Route::prefix('shipper')->middleware(['auth', checkShipper::class])->group(function () {
    require_once __DIR__ . '/shipper.php';
});

Route::get('/', [HomeController::class, 'home'])->name("home");

// api
Route::get('/api/ward/{id}', [WardController::class, 'api']);
Route::get('/api/ward/check/{id}', [WardController::class, 'check']);
Route::get('/api/product/{id}', [ProductController::class, 'apiCheck']);
Route::get('/response', [OrderController::class, 'response']);
Route::get('/ipn', [OrderController::class, 'ipnResponse']);







Route::get('/login', [EntryController::class, 'register'])->name('register');
Route::get('/register', [EntryController::class, 'register']);
Route::post('/login', [EntryController::class, 'processLogin'])->name('processLogin');
Route::post('/register', [EntryController::class, 'processRegister'])->name('processRegister');
Route::get('/logout', [EntryController::class, 'logout'])->name('logout');
Route::get('/myAccount', [EntryController::class, 'myAccount'])->name('myAccount');
Route::get('myOrder/{id}', [EntryController::class, 'myOrderDetail'])->name('myOrder');
Route::get('myOrder/{id}/{notification}', [EntryController::class, 'myOrderDetail'])->name('myOrderDetail');







Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::get('/test', [OrderController::class, 'rollShipper']);


Route::post('/checkout', [OrderController::class, 'buynow'])->name('buy');
Route::get('cart/remove/{id}', [OrderController::class, 'remove']);
Route::get('cart/destroy', [OrderController::class, 'destroy']);
Route::get('/cart', [HomeController::class, 'cart']);
Route::post('/cart', [OrderController::class, 'update']);
Route::get('addToCart/{id}', [OrderController::class, 'addToCart'])->name('addToCart');




Route::prefix('product')->group(function () {
    Route::get('/', [HomeController::class, 'list'])->name('product');
    Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detailProduct');
    Route::get('/search', [HomeController::class, 'search'])->name('search');
    Route::get('/category/{id}', [HomeController::class, 'category'])->name('category');
});

Route::get('/combo', [ClientComboController::class, 'list']);



