<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');;
Route::get('/second',[testController::class, 'second' ])->name('second');
Route::get('/third')->name('third');
Route::get('/home', [testController:: class, 'home'])->name('home');
Route::get('/products', [ProductController::class,'index'])->name('products.index');
Route::get('/products/create', [ProductController::class,'create' ])->name('products.create');
Route::post('/products', [ProductController::class,'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class,'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class,'edit'])->name('product.edit');
Route::put('/products/{product}', [ProductController::class,'update'])-> name('products.update');
Route::delete('/products/{product}', [ProductController::class,'destroy'])-> name('products.destroy');




