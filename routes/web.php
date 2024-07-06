<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;

Route::get('/', [HomeController::class,'index']);
Route::get('/Products', [ProductsController::class,'index']);