<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialsController;
use App\Models\Products;
use App\Models\Testimonials;
use App\Http\Controllers\EmailController;

Route::get('/', [HomeController::class,'index']);
Route::get('/products', [HomeController::class,'produk'])->name('home.produk');
Route::get('/products/{id}', [HomeController::class, 'show'])->name('home.show');
Route::get('/blogs', [HomeController::class,'blog']);
Route::get('/blogs/{id}', [HomeController::class, 'showblog'])->name('home.showblog');
Route::get('/about', [HomeController::class,'about']);
Route::get('/contact', [HomeController::class,'contact']);
Route::post('/send-email', [EmailController::class, 'send']);

Route::get('/dashboard', function () {
    $products = Products::all();
    $testimonials = Testimonials::all();
    return view('admin.dashboard', ['products' => $products, 'testimonials' => $testimonials]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/updateproducts', ProductsController::class);
    Route::resource('/updateblogs', BlogsController::class);
    Route::resource('/updatecontact', ContactController::class);
    Route::resource('/updateabout', AboutController::class);
    Route::resource('/testimoni', TestimonialsController::class);
    Route::get('/chats', function () {
        return view('livewire.admin.chats');
    })->name('admin.chats');
});

require __DIR__.'/auth.php';
