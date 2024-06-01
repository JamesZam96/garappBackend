<?php

use App\Http\Controllers\WarehouseController;
use Illuminate\Support\Facades\Route;

Route::get('/warehouses', [WarehouseController::class, 'index'])->name('warehouses.index');
Route::match(['get', 'post'], '/warehouses/create', [WarehouseController::class, 'store'])->name('warehouses.store')->middleware('verify.role:administrador');
Route::get('/warehouses/{id}', [WarehouseController::class, 'show'])->name('warehouses.show');
Route::match(['get', 'patch'], '/warehouses/{warehouse}/edit', [WarehouseController::class, 'update'])->name('warehouses.update');
Route::delete('/warehouses/{id}', [WarehouseController::class, 'destroy'])->name('warehouses.destroy')->middleware('verify.role:administrador');

