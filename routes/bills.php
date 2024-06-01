<?php

use App\Http\Controllers\BillController;
use Illuminate\Support\Facades\Route;

Route::get('/bills', [BillController::class, 'index'])->name('bills.index');
Route::match(['get', 'post'], '/bills/create', [BillController::class, 'store'])->name('bills.store')->middleware('verify.role:administrador');
Route::get('/bills/{id}', [BillController::class, 'show'])->name('bills.show');
Route::match(['get', 'patch'], '/bills/{bill}/edit', [BillController::class, 'update'])->name('bills.update');
Route::delete('/bills/{id}', [BillController::class, 'destroy'])->name('bills.destroy')->middleware('verify.role:administrador');


