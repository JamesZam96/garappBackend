<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

// Person routes
Route::get('person/create',[PersonController::class,'create'])->name('person.create');
Route::post('person/store',[PersonController::class,'store'])->name('person.store');
Route::get('person/list',[PersonController::class,'index'])->name('person.index');
Route::get('person/{person}',[PersonController::class,'show'])->name('person.show');
Route::get('person/{person}/edit',[PersonController::class,'edit'])->name('person.edit');
Route::put('person/{person}',[PersonController::class,'update'])->name('person.update');
Route::delete('person/{person}',[PersonController::class,'destroy'])->name('person.destroy');

// Vehicle routes
Route::get('vehicle/create',[VehicleController::class,'create'])->name('vehicle.create');
Route::post('vehicle/store',[VehicleController::class,'store'])->name('vehicle.store');
Route::get('vehicle/list',[VehicleController::class,'index'])->name('vehicle.index');
Route::get('vehicle/{vehicle}',[VehicleController::class,'show'])->name('vehicle.show');
Route::get('vehicle/{vehicle}/edit',[VehicleController::class,'edit'])->name('vehicle.edit');
Route::put('vehicle/{vehicle}',[VehicleController::class,'update'])->name('vehicle.update');
Route::delete('vehicle/{vehicle}',[VehicleController::class,'destroy'])->name('vehicle.destroy');

// Customer routes
Route::get('customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::post('customer/store',[CustomerController::class,'store'])->name('customer.store');
Route::get('customer/list',[CustomerController::class,'index'])->name('customer.index');
Route::get('customer/{customer}',[CustomerController::class,'show'])->name('customer.show');
Route::get('customer/{customer}/edit',[CustomerController::class,'edit'])->name('customer.edit');
Route::put('customer/{customer}',[CustomerController::class,'update'])->name('customer.update');
Route::delete('customer/{customer}',[CustomerController::class,'destroy'])->name('customer.destroy');

// Token
Route::get('generate/token',[TokenController::class,'csrfToken']);

// Deliveryman routes
Route::get('deliveryman/create',[DeliverymanController::class,'create'])->name('deliveryman.create');
Route::post('deliveryman/store',[DeliverymanController::class,'store'])->name('deliveryman.store');
Route::get('deliveryman/list',[DeliverymanController::class,'index'])->name('deliveryman.index');
Route::get('deliveryman/{deliveryman}',[DeliverymanController::class,'show'])->name('deliveryman.show');
Route::get('deliveryman/{deliveryman}/edit',[DeliverymanController::class,'edit'])->name('deliveryman.edit');
Route::put('deliveryman/{deliveryman}',[DeliverymanController::class,'update'])->name('deliveryman.update');
Route::delete('deliveryman/{deliveryman}',[DeliverymanController::class,'destroy'])->name('deliveryman.destroy');

