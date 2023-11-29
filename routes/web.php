<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
Route::get('/products/{slug}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/{slug}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
Route::put('/products/{slug}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{slug}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');


Route::resource('categories', App\Http\Controllers\CategoryController::class);
