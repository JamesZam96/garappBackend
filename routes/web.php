<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

//ruta de people
Route::get('/peoples' , [PeopleController::class , 'index'])->name('peoples.index');// Define una ruta para mostrar una lista de personas
Route::get('/peoples/create', [PeopleController::class , 'create'])->name('peoples.create');// Define una ruta para mostrar el formulario de creación de una nueva persona
Route::post('/peoples', [PeopleController::class, 'store'])->name('peoples.store');// Define una ruta para almacenar los datos de una nueva persona
Route::get('/peoples/{id}', [PeopleController::class , 'show'])->name('peoples.show');// Define una ruta para mostrar los detalles de una persona específica
Route::get('/peoples/{people}/edit', [PeopleController::class, 'edit'])->name('peoples.edit');// Define una ruta para mostrar el formulario de edición de una persona específica
Route::put('peoples/{people}',[PeopleController::class, 'update'])->name('peoples.update');// Define una ruta para actualizar los datos de una persona específica
Route::delete('/peoples/{id}', [PeopleController::class, 'destroy'])->name('peoples.destroy');// Define una ruta para eliminar una persona específica
//ruta de people

//ruta de vehicle
Route::get('/vehicles' , [VehicleController::class , 'index'])->name('vehicles.index');// Define una ruta para mostrar una lista de personas
Route::get('/vehicles/create', [VehicleController::class , 'create'])->name('vehicles.create');// Define una ruta para mostrar el formulario de creación de una nueva persona
Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');// Define una ruta para almacenar los datos de una nueva persona
Route::get('/vehicles/{id}', [VehicleController::class , 'show'])->name('vehicles.show');// Define una ruta para mostrar los detalles de una persona específica
Route::get('/vehicles/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit');// Define una ruta para mostrar el formulario de edición de una persona específica
Route::put('vehicles/{vehicle}',[VehicleController::class, 'update'])->name('vehicles.update');// Define una ruta para actualizar los datos de una persona específica
Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');// Define una ruta para eliminar una persona específica
//ruta de vehicle

//ruta de order
Route::get('/orders' , [OrderDetailController::class , 'index'])->name('orders.index');// Define una ruta para mostrar una lista de personas
Route::get('/orders/create', [OrderDetailController::class , 'create'])->name('orders.create');// Define una ruta para mostrar el formulario de creación de una nueva persona
Route::post('/orders', [OrderDetailController::class, 'store'])->name('orders.store');// Define una ruta para almacenar los datos de una nueva persona
Route::get('/orders/{id}', [OrderDetailController::class , 'show'])->name('orders.show');// Define una ruta para mostrar los detalles de una persona específica
Route::get('/orders/{order}/edit', [OrderDetailController::class, 'edit'])->name('orders.edit');// Define una ruta para mostrar el formulario de edición de una persona específica
Route::patch('orders/{id}',[OrderDetailController::class, 'update'])->name('orders.update');// Define una ruta para actualizar los datos de una persona específica
Route::delete('/orders/{id}', [OrderDetailController::class, 'destroy'])->name('orders.destroy');// Define una ruta para eliminar una persona específica
//ruta de order