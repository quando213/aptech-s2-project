<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\WardController;
use App\Http\Controllers\Client\AccountController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CheckoutController;
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
Route::prefix('shipper')->middleware(['auth', checkShipper::class])->group(function () {
    require_once __DIR__ . '/shipper.php';
});

Route::get('/', [HomeController::class, 'home'])->name("home");

// REPOSITION
Route::get('/response', [OrderController::class, 'response'])->name('response'); // thanh toán xong
Route::get('/response/cod/{id}', [OrderController::class, 'responseCod'])->name('responseCod'); // thanh toán xong
Route::get('/ipn', [OrderController::class, 'ipnResponse']); // vnpay gửi request trả về, xác nhận

Route::prefix('product')->group(function () {
    Route::get('/', [ClientProductController::class, 'list'])->name('listProduct');
    Route::get('{id}', [ClientProductController::class, 'detail'])->name('detailProduct');
});

Route::get('/login', [EntryController::class, 'register'])->name('login');
Route::post('/login', [EntryController::class, 'processLogin'])->name('processLogin');
Route::get('/register', [EntryController::class, 'register'])->name('register');
Route::post('/register', [EntryController::class, 'processRegister'])->name('processRegister');
Route::get('/logout', [EntryController::class, 'logout'])->name('logout');

Route::prefix('account')->middleware('auth')->group(function () {
    Route::get('/', [AccountController::class, 'myAccount'])->name('myAccount');
    Route::post('/', [AccountController::class, 'updateAccount'])->name('updateAccount');
    Route::get('my-order/{id}', [AccountController::class, 'myOrderDetail'])->name('myOrder');
    Route::get('my-order/{id}/{notification}', [AccountController::class, 'myOrderDetail'])->name('myOrderDetail');
});

Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'view'])->name('viewCart');
    Route::post('/', [CartController::class, 'update'])->name('updateCart');
    Route::post('add', [CartController::class, 'add'])->name('addToCart');
    Route::get('remove/{rowId}', [CartController::class, 'remove'])->name('removeCart');
    Route::get('destroy', [CartController::class, 'destroy'])->name('destroyCart');
});

Route::prefix('checkout')->middleware('auth')->group(function () {
    Route::get('/', [CheckoutController::class, 'checkout'])->name('checkout');
});

Route::get('/buy', [OrderController::class, 'buynow'])->name('buy');
Route::post('/checkout', [OrderController::class, 'buynow'])->name('buy');

// FOR DISTRICT & WARD SEEDER
//Route::prefix('insert')->group(function () {
//    require_once __DIR__ . '/insert_data.php';
//});

Route::get('/combo', [ClientComboController::class, 'list']);
