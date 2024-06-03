<?php

use App\Http\Controllers\DeliveryController;
use Illuminate\Support\Facades\Route;

Route::get('/deliveries', [DeliveryController::class, 'index'])->name('deliveries.index');
Route::match(['get', 'post'], '/deliveries/create', [DeliveryController::class, 'store'])->name('deliveries.store')->middleware('verify.role:administrador');
Route::get('/deliveries/{id}', [DeliveryController::class, 'show'])->name('deliveries.show');
Route::match(['get', 'patch'], '/deliveries/{deliverie}/edit', [DeliveryController::class, 'update'])->name('deliveries.update');
Route::delete('/deliveries/{id}', [DeliveryController::class, 'destroy'])->name('deliveries.destroy')->middleware('verify.role:administrador');

