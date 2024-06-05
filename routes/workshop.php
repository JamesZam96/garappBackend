<?php

use App\Http\Controllers\WorkshopController;
use Illuminate\Support\Facades\Route;


Route::get('/workshops', [WorkshopController::class, 'index'])->name('workshop.index');
Route::match(['get', 'post'], '/workshops/create', [WorkshopController::class, 'store'])->name('workshops.store')->middleware('verify.role:administrador');
Route::get('/workshops/{id}', [WorkshopController::class, 'show'])->name('workshops.show');
Route::match(['get', 'patch'], '/workshops/{workshop}/edit', [WorkshopController::class, 'update'])->name('workshops.update');
Route::delete('/workshops/{id}', [WorkshopController::class, 'destroy'])->name('workshops.destroy')->middleware('verify.role:administrador');

