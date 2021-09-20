<?php


use App\Http\Controllers\ShipperController;
use App\Http\Controllers\TemplateAdminController;

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


Route::get('/', [ShipperController::class, 'index']);

Route::prefix('/orders')->group(function () {
    Route::get('', [ShipperController::class, 'list'])->name('shipperOrderList');
    Route::get('/{id}', [ShipperController::class, 'detail'])->name('shipperOrderDetail');
});
Route::prefix('/notification')->group(function () {
    Route::get('', [ShipperController::class, 'notification']);

});


