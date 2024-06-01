<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/categorys', [CategoryController::class, 'index'])->name('categorys.index');
Route::match(['get', 'post'], '/categorys/create', [CategoryController::class, 'store'])->name('categorys.store')->middleware('verify.role:administrador');
Route::get('/categorys/{id}', [CategoryController::class, 'show'])->name('categorys.show');
Route::match(['get', 'patch'], '/categorys/{category}/edit', [CategoryController::class, 'update'])->name('categorys.update');
Route::delete('/categorys/{id}', [CategoryController::class, 'destroy'])->name('categorys.destroy')->middleware('verify.role:administrador');

