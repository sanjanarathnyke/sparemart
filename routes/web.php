<?php

use App\Http\Controllers\ActiveCustomerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VehicleItemsController;
use App\Models\Suspenstion;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/parts', [ProductController::class, 'index'])->name('parts');

Route::get('/engine', function () {
    return view('engine-parts');
})->name('engine');

Route::get('/light', function () {
    return view('lightning');
})->name('light');

Route::get('/tires', function () {
    return view('tires');
})->name('tires');

Route::get('/performance', function () {
    return view('performance-parts');
})->name('performance');

Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::post('/remove-from-cart', [CartController::class, 'removeFromCart'])->name('remove-from-cart');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart');


Route::get('/parts/{id}', [ProductController::class, 'show'])->name('single');

// Route::get('/confirm', [CartController::class, 'displayConfirm'])->name('confirm');

Route::get('/suspensions',[VehicleItemsController::class,'getSuspensionItems'])->name('shoks');

Route::get('/tires', [VehicleItemsController::class, 'getTires'])->name('tires');

Route::get('/performance',[VehicleItemsController::class,'getperformanceItems'])->name('performance');

Route::get('/light',[VehicleItemsController::class,'getlights'])->name('light');

Route::get('/engine',[VehicleItemsController::class,'getengine'])->name('engine');

Route::get('/confirm',[ActiveCustomerController::class,'displayConfirm'])->name('confirm');

Route::post('/customer-store',[ActiveCustomerController::class,'storeSubscribers'])->name('cart.store-and-print');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/invoice', function () {
    return view('layouts.invoice');
})->name('invoice');
