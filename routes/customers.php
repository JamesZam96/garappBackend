<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::match(['get', 'post'], '/customers/create', [CustomerController::class, 'store'])->name('customers.store')->middleware('verify.role:administrador');
Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
Route::match(['get', 'patch'], '/customers/{customer}/edit', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy')->middleware('verify.role:administrador');

