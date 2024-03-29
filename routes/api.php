<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::post('/orders', [CheckoutController::class, 'store']);

Route::get('/ordered-products', [CheckoutController::class, 'fetchOrderedProducts']);

//Route::post('/orders', 'CheckoutController@store');



