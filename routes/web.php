<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

// Define las rutas relacionadas con el controlador PeopleController
Route::get('/peoples' , [PeopleController::class , 'index'])->name('peoples.index'); // Muestra una lista de personas
Route::get('/peoples/create', [PeopleController::class , 'create'])->name('peoples.create'); // Muestra el formulario para crear una nueva persona
Route::post('/peoples', [PeopleController::class, 'store'])->name('peoples.store'); // Almacena los datos de una nueva persona
Route::get('/peoples/{id}', [PeopleController::class , 'show'])->name('peoples.show'); // Muestra los detalles de una persona específica
Route::get('/peoples/{people}/edit', [PeopleController::class, 'edit'])->name('peoples.edit'); // Muestra el formulario de edición de una persona específica
Route::patch('peoples/{id}',[PeopleController::class, 'update'])->name('peoples.update'); // Actualiza los datos de una persona específica
Route::delete('/peoples/{id}', [PeopleController::class, 'destroy'])->name('peoples.destroy'); // Elimina una persona específica
// Define las rutas relacionadas con el controlador PeopleController

// Define las rutas relacionadas con el controlador VehicleController
Route::get('/vehicles' , [VehicleController::class , 'index'])->name('vehicles.index'); // Muestra una lista de vehículos
Route::get('/vehicles/create', [VehicleController::class , 'create'])->name('vehicles.create'); // Muestra el formulario para crear un nuevo vehículo
Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store'); // Almacena los datos de un nuevo vehículo
Route::get('/vehicles/{id}', [VehicleController::class , 'show'])->name('vehicles.show'); // Muestra los detalles de un vehículo específico
Route::get('/vehicles/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit'); // Muestra el formulario de edición de un vehículo específico
Route::patch('vehicles/{id}',[VehicleController::class, 'update'])->name('vehicles.update'); // Actualiza los datos de un vehículo específico
Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy'])->name('vehicles.destroy'); // Elimina un vehículo específico
// Define las rutas relacionadas con el controlador VehicleController

// Define las rutas relacionadas con el controlador OrderDetailController para las órdenes
Route::get('/orders' , [OrderDetailController::class , 'index'])->name('orders.index'); // Muestra una lista de órdenes
Route::get('/orders/create', [OrderDetailController::class , 'create'])->name('orders.create'); // Muestra el formulario para crear una nueva orden
Route::post('/orders', [OrderDetailController::class, 'store'])->name('orders.store'); // Almacena los datos de una nueva orden
Route::get('/orders/{id}', [OrderDetailController::class , 'show'])->name('orders.show'); // Muestra los detalles de una orden específica
Route::get('/orders/{order}/edit', [OrderDetailController::class, 'edit'])->name('orders.edit'); // Muestra el formulario de edición de una orden específica
Route::patch('orders/{id}',[OrderDetailController::class, 'update'])->name('orders.update'); // Actualiza los datos de una orden específica
Route::delete('/orders/{id}', [OrderDetailController::class, 'destroy'])->name('orders.destroy'); // Elimina una orden específica
// Define las rutas relacionadas con el controlador OrderDetailController para las órdenes

// Define las rutas relacionadas con el controlador DeliveryController para las entregas
Route::get('/deliverys', [DeliveryController::class, 'index'])->name('deliverys.index'); // Muestra una lista de entregas
Route::get('/deliverys/create', [DeliveryController::class, 'create'])->name('deliverys.create'); // Muestra el formulario para crear una nueva entrega
Route::post('/deliverys', [DeliveryController::class, 'store'])->name('deliverys.store'); // Almacena los datos de una nueva entrega
Route::get('/deliverys/{id}', [DeliveryController::class, 'show'])->name('deliverys.show'); // Muestra los detalles de una entrega específica
Route::get('/deliverys/{delivery}/edit', [DeliveryController::class, 'edit'])->name('deliverys.edit'); // Muestra el formulario de edición de una entrega específica
Route::patch('deliverys/{id}', [DeliveryController::class, 'update'])->name('deliverys.update'); // Actualiza los datos de una entrega específica
Route::delete('/deliverys/{id}', [DeliveryController::class, 'destroy'])->name('deliverys.destroy'); // Elimina una entrega específica
// Define las rutas relacionadas con el controlador DeliveryController para las entregas


// Define las rutas relacionadas con el controlador CustomerController para los clientes
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index'); // Muestra una lista de clientes
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create'); // Muestra el formulario para crear un nuevo cliente
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store'); // Almacena los datos de un nuevo cliente
Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show'); // Muestra los detalles de un cliente específico
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit'); // Muestra el formulario de edición de un cliente específico
Route::patch('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update'); // Actualiza los datos de un cliente específico
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy'); // Elimina un cliente específico
// Define las rutas relacionadas con el controlador CustomerController para los clientes

// Define las rutas relacionadas con el controlador CompanyController para las compañías
Route::get('/companys', [CompanyController::class, 'index'])->name('companys.index'); // Muestra una lista de compañías
Route::get('/companys/create', [CompanyController::class, 'create'])->name('companys.create'); // Muestra el formulario para crear una nueva compañía
Route::post('/companys', [CompanyController::class, 'store'])->name('companys.store'); // Almacena los datos de una nueva compañía
Route::get('/companys/{id}', [CompanyController::class, 'show'])->name('companys.show'); // Muestra los detalles de una compañía específica
Route::get('/companys/{company}/edit', [CompanyController::class, 'edit'])->name('companys.edit'); // Muestra el formulario de edición de una compañía específica
Route::patch('/companys/{id}', [CompanyController::class, 'update'])->name('companys.update'); // Actualiza los datos de una compañía específica
Route::delete('/companys/{id}', [CompanyController::class, 'destroy'])->name('companys.destroy'); // Elimina una compañía específica
// Define las rutas relacionadas con el controlador CompanyController para las compañías

// Define las rutas relacionadas con el controlador CategoryController para las categorías
Route::get('/categorys', [CategoryController::class, 'index'])->name('categorys.index'); // Muestra una lista de categorías
Route::get('/categorys/create', [CategoryController::class, 'create'])->name('categorys.create'); // Muestra el formulario para crear una nueva categoría
Route::post('/categorys', [CategoryController::class, 'store'])->name('categorys.store'); // Almacena los datos de una nueva categoría
Route::get('/categorys/{id}', [CategoryController::class, 'show'])->name('categorys.show'); // Muestra los detalles de una categoría específica
Route::get('/categorys/{category}/edit', [CategoryController::class, 'edit'])->name('categorys.edit'); // Muestra el formulario de edición de una categoría específica
Route::patch('/categorys/{id}', [CategoryController::class, 'update'])->name('categorys.update'); // Actualiza los datos de una categoría específica
Route::delete('/categorys/{id}', [CategoryController::class, 'destroy'])->name('categorys.destroy'); // Elimina una categoría específica
// Define las rutas relacionadas con el controlador CategoryController para las categorías

// Define las rutas relacionadas con el controlador OrderController para las order
Route::get('/order', [OrderController::class, 'index'])->name('order.index'); // Muestra una lista de order
Route::get('/order/create', [OrderController::class, 'create'])->name('order.create'); // Muestra el formulario para crear una nueva categoría
Route::post('/order', [OrderController::class, 'store'])->name('order.store'); // Almacena los datos de una nueva categoría
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show'); // Muestra los detalles de una categoría específica
Route::get('/order/{orde}/edit', [OrderController::class, 'edit'])->name('order.edit'); // Muestra el formulario de edición de una categoría específica
Route::patch('/order/{id}', [OrderController::class, 'update'])->name('order.update'); // Actualiza los datos de una categoría específica
Route::delete('/order/{id}', [OrderController::class, 'destroy'])->name('order.destroy'); // Elimina una categoría específica
// Define las rutas relacionadas con el controlador OrderController para las order


// Define las rutas relacionadas con el controlador ProducController para los producs
Route::get('/producs', [ProducController::class, 'index'])->name('producs.index'); // Muestra una lista de producs
Route::get('/producs/create', [ProducController::class, 'create'])->name('producs.create'); // Muestra el formulario para crear un nuevo produc
Route::post('/producs', [ProducController::class, 'store'])->name('producs.store'); // Almacena los datos de un nuevo produc
Route::get('/producs/{id}', [ProducController::class, 'show'])->name('producs.show'); // Muestra los detalles de un produc específico
Route::get('/producs/{produc}/edit', [ProducController::class, 'edit'])->name('producs.edit'); // Muestra el formulario de edición de un produc específico
Route::patch('/producs/{id}', [ProducController::class, 'update'])->name('producs.update'); // Actualiza los datos de un produc específico
Route::delete('/producs/{id}', [ProducController::class, 'destroy'])->name('producs.destroy'); // Elimina un produc específico
// Define las rutas relacionadas con el controlador ProducController para los producs

// Define las rutas relacionadas con el controlador ServicesController para los servicios
Route::get('/services', [ServicesController::class, 'index'])->name('services.index'); // Muestra una lista de servicios
Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create'); // Muestra el formulario para crear un nuevo servicio
Route::post('/services', [ServicesController::class, 'store'])->name('services.store'); // Almacena los datos de un nuevo servicio
Route::get('/services/{id}', [ServicesController::class, 'show'])->name('services.show'); // Muestra los detalles de un servicio específico
Route::get('/services/{service}/edit', [ServicesController::class, 'edit'])->name('services.edit'); // Muestra el formulario de edición de un servicio específico
Route::patch('/services/{id}', [ServicesController::class, 'update'])->name('services.update'); // Actualiza los datos de un servicio específico
Route::delete('/services/{id}', [ServicesController::class, 'destroy'])->name('services.destroy'); // Elimina un servicio específico
// Define las rutas relacionadas con el controlador ServicesController para los servicios

// Define las rutas relacionadas con el controlador BillController para las facturas
Route::get('/bills', [BillController::class, 'index'])->name('bills.index'); // Muestra una lista de facturas
Route::get('/bills/create', [BillController::class, 'create'])->name('bills.create'); // Muestra el formulario para crear una nueva factura
Route::post('/bills', [BillController::class, 'store'])->name('bills.store'); // Almacena los datos de una nueva factura
Route::get('/bills/{id}', [BillController::class, 'show'])->name('bills.show'); // Muestra los detalles de una factura específica
Route::get('/bills/{bill}/edit', [BillController::class, 'edit'])->name('bills.edit'); // Muestra el formulario de edición de una factura específica
Route::patch('/bills/{id}', [BillController::class, 'update'])->name('bills.update'); // Actualiza los datos de una factura específica
Route::delete('/bills/{id}', [BillController::class, 'destroy'])->name('bills.destroy'); // Elimina una factura específica
// Define las rutas relacionadas con el controlador BillController para las facturas






