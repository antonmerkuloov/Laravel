<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');;
Route::get('/second',[testController::class, 'second' ])->name('second');
Route::get('/third')->name('third');

