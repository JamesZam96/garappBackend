<?php

namespace App\Http\Controllers;
use App\Http\Services\DataServices;
use App\Models\DeliveryModel;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    protected $dataServices;
    public function __construct()
      {
          // Inicializar el servicio de datos con el modelo OrderDetailModel
          $this->dataServices = new DataServices(new DeliveryModel());
      }
      public function index() {
        $deliverys =  $this->dataServices->getAll();// Recupera todas las personas ordenadas por ID de forma descendente y paginadas
        return view('delivery.index', compact('deliverys'));// Devuelve la vista 'vehicle.index' pasando las personas recuperadas
      }
      public function create(){ // Método para mostrar el formulario de creación de una nueva persona
        return view('delivery.create');// Devuelve la vista 'people.create' para crear una nueva persona
      }

      public function store(Request $request){// Método para almacenar una nueva persona en la base de datos
        $delivery =  $this->dataServices->create($request->all());// Valida los datos de la solicitud y crea una nueva persona
        return redirect()->route('deliverys.index');// Redirige al usuario a la ruta 'peoples.index' después de almacenar la persona
      }
      public function show($id){ // Método para mostrar los detalles de una persona específica
        $delivery =  $this->dataServices->getById($id);// Encuentra la persona por su ID y la pasa a la vista 'people.show'
          return view('delivery.show', compact('delivery'));
      }
      public function edit(DeliveryModel $delivery) {// Método para mostrar el formulario de edición de una persona
        return view('delivery.edit', compact('delivery'));// Pasa la persona a la vista 'people.edit' para su edición
      }
      public function update(Request $request, $id){// Método para actualizar los datos de una persona en la base de datos
        $delivery =  $this->dataServices->update($id, $request->all());// Valida los datos de la solicitud y actualiza la persona
        if (!$delivery) {
          abort(404, 'Order not found');
      }
        return redirect()->route('delivery.index');// Redirige al usuario a la ruta 'peoples.index' después de actualizar la persona
      }
      public function destroy($id) {// Método para eliminar una persona de la base de datos
        $delivery =  $this->dataServices->delete($id);// Encuentra la persona por su ID y la elimina
          if(!$delivery) { // Si la persona no existe, devuelve una respuesta JSON con un mensaje de error
            abort(404, 'Order not found');
          }
          return redirect()->route('deliverys.index');
      }
}
