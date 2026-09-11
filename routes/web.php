<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::resource('product', ProductController::class);
Route::resource('customer', CustomerController::class);
Route::resource('address', AddressController::class);
Route::resource('order', OrderController::class);