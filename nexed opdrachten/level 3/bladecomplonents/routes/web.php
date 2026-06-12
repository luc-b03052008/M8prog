<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sale', [ShopController::class, 'sale']);
Route::get('/shoes', [ShopController::class, 'shoes']);
Route::get('/sneakers', [ShopController::class, 'sneakers']);
Route::get('/boots', [ShopController::class, 'boots']);
