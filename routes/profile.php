<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/peoples', [ProfileController::class, 'index'])->name('peoples.index');
Route::match(['get', 'post'], '/peoples/create', [ProfileController::class, 'store'])->name('peoples.store')->middleware('verify.role:administrador');
Route::get('/peoples/{id}', [ProfileController::class, 'show'])->name('peoples.show');
Route::match(['get', 'patch'], '/peoples/{people}/edit', [ProfileController::class, 'update'])->name('peoples.update');
Route::delete('/peoples/{id}', [ProfileController::class, 'destroy'])->name('peoples.destroy')->middleware('verify.role:administrador');

