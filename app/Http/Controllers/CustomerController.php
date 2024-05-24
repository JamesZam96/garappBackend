<?php

namespace App\Http\Controllers;
use App\Http\Services\DataServices;
use App\Models\CustomerModel;
use App\Models\PeopleModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $dataServices;
    public function __construct()
      {
          // Inicializar el servicio de datos con el modelo OrderDetailModel
          $this->dataServices = new DataServices(new CustomerModel());
      }
      public function index() {
        $customers =  $this->dataServices->getAll();// Recupera todas las personas ordenadas por ID de forma descendente y paginadas
        return view('Customer.index', compact('customers'));// Devuelve la vista 'vehicle.index' pasando las personas recuperadas
      }
      public function create(){ // Método para mostrar el formulario de creación de una nueva persona
        $people = PeopleModel::all();
        return view('customer.create', compact('people'));// Devuelve la vista 'people.create' para crear una nueva persona
      }

      public function store(Request $request){// Método para almacenar una nueva persona en la base de datos
        $customer =  $this->dataServices->create($request->all());// Valida los datos de la solicitud y crea una nueva persona
        // $customer->people()->create(['people_id'=>$request->people_id]);
        return redirect()->route('customers.index');// Redirige al usuario a la ruta 'peoples.index' después de almacenar la persona
      }
      public function show($id){ // Método para mostrar los detalles de una persona específica
        $customer =  $this->dataServices->getById($id);// Encuentra la persona por su ID y la pasa a la vista 'people.show'
          return view('customer.show', compact('customer'));
      }
      public function edit(CustomerModel $customer) {// Método para mostrar el formulario de edición de una persona
        return view('customer.edit', compact('customer'));// Pasa la persona a la vista 'people.edit' para su edición
      }
      public function update(Request $request, $id){// Método para actualizar los datos de una persona en la base de datos
        $customer =  $this->dataServices->update($id, $request->all());// Valida los datos de la solicitud y actualiza la persona
        if (!$customer) {
          abort(404, 'Order not found');
      }
        return redirect()->route('customer.index');// Redirige al usuario a la ruta 'peoples.index' después de actualizar la persona
      }
      public function destroy($id) {// Método para eliminar una persona de la base de datos
        $customer =  $this->dataServices->delete($id);// Encuentra la persona por su ID y la elimina
          if(!$customer) { // Si la persona no existe, devuelve una respuesta JSON con un mensaje de error
            abort(404, 'Order not found');
          }
          return redirect()->route('customers.index');
      }
}
