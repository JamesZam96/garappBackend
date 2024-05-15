<?php

namespace App\Http\Controllers;

use App\Models\OrderDetailModel;
use App\Models\OrderModel;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index(){
        $orders = OrderDetailModel::all();
        return view('orderDetails.index', compact('orders'));
    }

    public function create(){ 
        return view('orderDetails.create');// Devuelve la vista 'people.create' para crear una nueva persona
      }

      public function store(Request $request){// Método para almacenar una nueva persona en la base de datos
        $orders = OrderDetailModel::create($request->all());// Valida los datos de la solicitud y crea una nueva persona
        return redirect()->route('orderDetails.index');// Redirige al usuario a la ruta 'peoples.index' después de almacenar la persona
      }
}
