<?php

use App\Http\Controllers\AboutUs\AboutUsUsController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\ContactUs\ContactUsController;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Help;
use Termwind\Components\Hr;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::get('/home',[Homecontroller:: class,'index'])->name('home');
Route::get('/contactus',[ContactUsController ::class,'index'])->name('contactus');
Route::get('/aboutus',[AboutUsUsController ::class,'index'])->name('aboutus');
Route::post('/product/store', [HomeController:: class,'create'])->name('home.store');



//product

Route::get('/product/create', [ProductController:: class,'create'])->name('products.create');
Route::post('/product/create', [ProductController:: class,'store'])->name('products.store');
Route::get('/products', [ProductController:: class,'index'])->name('products.index');

//show
Route::get('/product/{id}', [ProductController:: class,'show'])->name('products.show');
//edit
Route::get('/product/{id}/edit', [ProductController:: class,'edit'])->name('products.edit');
Route::patch('/product/{id}/update', [ProductController:: class,'update'])->name('products.update');
Route::get('/product/{id}/delete', [ProductController:: class,'destroy'])->name('products.delete');

