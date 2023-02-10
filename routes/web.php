<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Website\HomeController as WebsiteHomeController;
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



Auth::routes();

Route::middleware(['auth'])->group(function(){

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('product-payment/{product}', [OrderController::class, 'productPayment']);
    Route::post('order/store', [OrderController::class, 'store']);
});


Route::get('/', [WebsiteHomeController::class, 'index']);