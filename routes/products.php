<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::match(['get', 'post'], '/products/create', [ProductController::class, 'store'])->name('products.store')->middleware('verify.role:administrador');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::match(['get', 'patch'], '/products/{product}/edit', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('verify.role:administrador');


