<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Models\Products;

Route::get('/', [HomeController::class,'index']);
Route::get('/products', [HomeController::class,'produk']);

Route::get('/dashboard', function () {
    $products = Products::all();
    return view('admin.dashboard', ['products' => $products]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/updateproducts', ProductsController::class);
});

require __DIR__.'/auth.php';
