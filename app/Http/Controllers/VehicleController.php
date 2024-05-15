<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicle;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index() {
        $vehicles = VehicleModel::orderBy('id', 'desc')->paginate();// Recupera todas las personas ordenadas por ID de forma descendente y paginadas
        return view('vehicle.index', compact('vehicles'));// Devuelve la vista 'vehicle.index' pasando las personas recuperadas
      }
    
      public function create(){ // Método para mostrar el formulario de creación de una nueva persona
        return view('vehicle.create');// Devuelve la vista 'vehicle.create' para crear una nueva persona
      }
    
      public function store(StoreVehicle $request){// Método para almacenar una nueva persona en la base de datos
        $vehicle = VehicleModel::create($request->all());// Valida los datos de la solicitud y crea una nueva persona
        return redirect()->route('vehicles.index');// Redirige al usuario a la ruta 'peoples.index' después de almacenar la persona
      }
    
      public function show($id){ // Método para mostrar los detalles de una persona específica
        $vehicle = VehicleModel::find($id);// Encuentra la persona por su ID y la pasa a la vista 'people.show'
          return view('vehicle.show', compact('vehicle'));
      }
    
      public function edit(VehicleModel $vehicle) {// Método para mostrar el formulario de edición de una persona
        return view('vehicle.edit', compact('vehicle'));// Pasa la persona a la vista 'people.edit' para su edición
      }
    
      public function update(StoreVehicle $request, VehicleModel $vehicle){// Método para actualizar los datos de una persona en la base de datos
        $vehicle->update($request->all());// Valida los datos de la solicitud y actualiza la persona
           return redirect()->route('vehicles.index');// Redirige al usuario a la ruta 'peoples.index' después de actualizar la persona
      }
    
      public function destroy($id) {// Método para eliminar una persona de la base de datos
        $vehicle = VehicleModel::find($id);// Encuentra la persona por su ID y la elimina
          if(!$vehicle) { // Si la persona no existe, devuelve una respuesta JSON con un mensaje de error
              return response()->json(['message' => 'No se encontró la persona'], 404);
          }
          $vehicle->delete();// Elimina la persona y redirige al usuario a la ruta 'peoples.index'
          return redirect()->route('vehicles.index');
      }
}
