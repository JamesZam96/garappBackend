<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::match(['get', 'post'], '/categories/create', [CategoryController::class, 'store'])->name('categories.store')->middleware('verify.role:administrador');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::match(['get', 'patch'], '/categories/{categorie}/edit', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy')->middleware('verify.role:administrador');

