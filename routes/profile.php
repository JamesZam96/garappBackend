<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::match(['get', 'post'], '/profiles/create', [ProfileController::class, 'store'])->name('profile.create')->middleware('verify.role:administrador');
Route::get('/profiles/{id}', [ProfileController::class, 'show'])->name('profiles.show');
Route::match(['get', 'patch'], '/profiles/{profile}/edit', [ProfileController::class, 'update'])->name('profiles.update');
Route::delete('/profiles/{id}', [ProfileController::class, 'destroy'])->name('profiles.destroy')->middleware('verify.role:administrador');

