<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeople;
use App\Models\PeopleModel;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
  public function index() {
    $peoples = PeopleModel::orderBy('id', 'desc')->paginate();// Recupera todas las personas ordenadas por ID de forma descendente y paginadas
    return view('people.index', compact('peoples'));// Devuelve la vista 'people.index' pasando las personas recuperadas
  }

  public function create(){ // Método para mostrar el formulario de creación de una nueva persona
    return view('people.create');// Devuelve la vista 'people.create' para crear una nueva persona
  }

  public function store(StorePeople $request){// Método para almacenar una nueva persona en la base de datos
    $people = PeopleModel::create($request->all());// Valida los datos de la solicitud y crea una nueva persona
    return redirect()->route('peoples.index');// Redirige al usuario a la ruta 'peoples.index' después de almacenar la persona
  }

  public function show($id){ // Método para mostrar los detalles de una persona específica
    $people = PeopleModel::find($id);// Encuentra la persona por su ID y la pasa a la vista 'people.show'
      return view('people.show', compact('people'));
  }

  public function edit(PeopleModel $people) {// Método para mostrar el formulario de edición de una persona
    return view('people.edit', compact('people'));// Pasa la persona a la vista 'people.edit' para su edición
  }

  public function update(StorePeople $request, PeopleModel $people){// Método para actualizar los datos de una persona en la base de datos
    $people->update($request->all());// Valida los datos de la solicitud y actualiza la persona
       return redirect()->route('peoples.index');// Redirige al usuario a la ruta 'peoples.index' después de actualizar la persona
  }

  public function destroy($id) {// Método para eliminar una persona de la base de datos
    $people = PeopleModel::find($id);// Encuentra la persona por su ID y la elimina
      if(!$people) { // Si la persona no existe, devuelve una respuesta JSON con un mensaje de error
          return response()->json(['message' => 'No se encontró la persona'], 404);
      }
      $people->delete();// Elimina la persona y redirige al usuario a la ruta 'peoples.index'
      return redirect()->route('peoples.index');
  }
}
