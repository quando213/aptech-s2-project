<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\WardController;
use App\Http\Controllers\Client\ClientProductController;
use App\Http\Controllers\Client\EntryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\TemplateAdminController;
use App\Http\Controllers\TemplateClientController;
use App\Http\Controllers\Admin\ComboController;
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

Route::prefix('admin')->group(function () {
    require_once __DIR__ . '/admin.php';
});
Route::get('/api/ward/{id}', [WardController::class, 'api']);
Route::get('/api/product/{id}', [ProductController::class, 'apiCheck']);
Route::get('/test', [OrderController::class, 'test']);
Route::get('/test/order', [OrderController::class, 'detail']);
Route::get('addToCart/{id}', [OrderController::class, 'addToCart'])->name('addToCart');

//Route::post('/test/order', [OrderController::class, 'update'])->name('update');
Route::get('/buy', [OrderController::class, 'buynow'])->name('buy');

Route::get('/', [HomeController::class, 'home'])->name("home");


Route::prefix('/shipper')->middleware(['auth', checkShipper::class])->group(function () {
    Route::get('/', [WardController::class, 'api']);
});


Route::get('/login', [EntryController::class, 'register'])->name('register');
Route::get('/register', [EntryController::class, 'register']);
Route::post('/login', [EntryController::class, 'processLogin'])->name('processLogin');
Route::post('/register', [EntryController::class, 'processRegister'])->name('processRegister');
Route::get('/logout', [EntryController::class, 'logout'])->name('logout');
Route::get('/checkout', [OrderController::class, 'checkout']);
Route::post('/checkout', [OrderController::class, 'buynow'])->name('buy');
Route::get('cart/remove/{id}', [OrderController::class, 'remove']);
Route::get('cart/destroy', [OrderController::class, 'destroy']);
Route::get('/cart', [TemplateClientController::class, 'cart']);
Route::post('/cart', [OrderController::class, 'update']);


Route::prefix('product')->group(function () {
    Route::get('/', [ClientProductController::class, 'list']);
    Route::get('detail/{id}', [ClientProductController::class, 'detail'])->name('detailProduct');
});
Route::get('/form-layout', [TemplateAdminController::class, 'form_layout']);
Route::get('/input', [TemplateAdminController::class, 'input']);
Route::get('/table', [TemplateAdminController::class, 'table']);
Route::get('/datatable', [TemplateAdminController::class, 'datatable']);
Route::get('/email', [TemplateAdminController::class, 'email']);
Route::get('/sign-up', [TemplateAdminController::class, 'sign_in']);
Route::get('/forgot', [TemplateAdminController::class, 'forgot']);
Route::get('/product/create', [TemplateAdminController::class, 'createProduct']);
Route::get('/product/list', [TemplateAdminController::class, 'listProduct']);
Route::get('/blog-simple-sidebar-left', [TemplateClientController::class, 'blog']);
Route::get('/blog-list-sidebar-left', [TemplateClientController::class, 'blog2']);
Route::get('/contact', [TemplateClientController::class, 'contact']);

Route::get('/product-single-tab-left', [TemplateClientController::class, 'product_left']);
Route::get('/shop-sidebar-grid-left', [TemplateClientController::class, 'shop_layout_left']);
Route::get('/shop-sidebar-full-width', [TemplateClientController::class, 'shop_layout_with']);

Route::get('/my-account', [TemplateClientController::class, 'account']);
Route::get('/about', [TemplateClientController::class, 'about']);
Route::get('/frequently-questions', [TemplateClientController::class, 'frequently']);
Route::get('/privacy-policy', [TemplateClientController::class, 'privacy_policy']);
Route::get('/wishlist', [TemplateClientController::class, 'wishlist']);
Route::get('/emply-cart', [TemplateClientController::class, 'emply_cart']);

Route::get('/compare', [TemplateClientController::class, 'compare']);


