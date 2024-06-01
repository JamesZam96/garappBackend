<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::match(['get', 'post'], '/services/create', [ServiceController::class, 'store'])->name('services.store')->middleware('verify.role:administrador');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');
Route::match(['get', 'patch'], '/services/{service}/edit', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy')->middleware('verify.role:administrador');

