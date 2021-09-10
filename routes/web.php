<?php

use App\Http\Controllers\{Admin\AdminUserController,
    Admin\CategoryController,
    Admin\GroupController,
    Admin\ProductController,
    Admin\WardController,
    Client\LoginRegisterController,
    Client\LoginController,
    TemplateAdminController,
    TemplateClientController,
    Admin\ComboController};
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


Route::get('/', function () {
    return view('welcome');
});
// phân quản lý user trang admin


//template admin

Route::get('/form-layout', [TemplateAdminController::class, 'form_layout']);
Route::get('/input', [TemplateAdminController::class, 'input']);
Route::get('/table', [TemplateAdminController::class, 'table']);
Route::get('/datatable', [TemplateAdminController::class, 'datatable']);
Route::get('/email', [TemplateAdminController::class, 'email']);
Route::get('/login', [TemplateAdminController::class, 'login']);
Route::get('/sign-up', [TemplateAdminController::class, 'sign_in']);
Route::get('/forgot', [TemplateAdminController::class, 'forgot']);
Route::get('/product/create', [TemplateAdminController::class, 'createProduct']);
Route::get('/product/list', [TemplateAdminController::class, 'listProduct']);

//Template-Client
Route::get('/', [TemplateClientController::class, 'index']);
Route::get('/', [TemplateClientController::class, 'home']);
Route::get('/blog-simple-sidebar-left', [TemplateClientController::class, 'blog']);
Route::get('/blog-list-sidebar-left', [TemplateClientController::class, 'blog2']);
Route::get('/contact', [TemplateClientController::class, 'contact']);
Route::get('/product-single-default', [TemplateClientController::class, 'product_default']);
Route::get('/product-single-tab-left', [TemplateClientController::class, 'product_left']);
Route::get('/shop-sidebar-grid-left', [TemplateClientController::class, 'shop_layout_left']);
Route::get('/shop-sidebar-full-width', [TemplateClientController::class, 'shop_layout_with']);
Route::get('/cart', [TemplateClientController::class, 'cart']);
Route::get('/login', [TemplateClientController::class, 'login']);
Route::get('/my-account', [TemplateClientController::class, 'account']);
Route::get('/about', [TemplateClientController::class, 'about']);
Route::get('/frequently-questions', [TemplateClientController::class, 'frequently']);
Route::get('/privacy-policy', [TemplateClientController::class, 'privacy_policy']);
Route::get('/wishlist', [TemplateClientController::class, 'wishlist']);
Route::get('/emply-cart', [TemplateClientController::class, 'emply_cart']);
Route::get('/checkout', [TemplateClientController::class, 'checkout']);
Route::get('/compare', [TemplateClientController::class, 'compare']);




//trang login cho client
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
//Route::get('/login', [LoginController::class, 'save']);

//trang sign-up cho client
Route::get('/sign-up', [LoginRegisterController::class, 'signUp']);
Route::post('/sign-up', [LoginRegisterController::class, 'save']);
//Route::post('/sign-up', [LoginRegisterController::class, 'store']);
//Route::get('/save', [SignUpController::class, 'save']);
