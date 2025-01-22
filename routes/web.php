<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/parts',[ProductController::class,'index'])->name('parts');

Route::get('/shoks',function(){
    return view('suspention');
})->name('shoks');

Route::get('/engine',function(){
    return view('engine-parts');
})->name('engine');

Route::get('/light',function(){
    return view('lightning');
})->name('light');

Route::get('/tires',function(){
    return view('tires');
})->name('tires');

Route::get('/performance',function(){
    return view('performance-parts');
})->name('performance');

Route::get('/cart',function(){
    return view('cart');
})->name('cart');

Route::get('/single',function(){
    return view('single-item');
})->name('single');