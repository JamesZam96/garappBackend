<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/auths', [AuthController::class, 'index'])->name('auths.index');
// Route::get('/register', [AuthController::class, 'create'])->name('auths.create');
// Route::post('/register', [AuthController::class , 'register'])->name('auths.store');
Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('auths.register');
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('auths.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auths.logout')->middleware('auth');

