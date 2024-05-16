<?php

namespace App\Http\Controllers;

use App\Http\Services\DataServices;
use App\Models\OrderDetailModel;
use Illuminate\Http\Request;



class OrderDetailController extends Controller
{

    protected $dataServices;
     public function __construct()
     {
        $this->dataServices = new DataServices(new OrderDetailModel());
     }
    public function index(){
        $orders = OrderDetailModel::orderBy('id', 'desc')->paginate();
        return view('orderDetails.index', compact('orders'));
    }

    public function create(){ 
        return view('orderDetails.create');// Devuelve la vista 'people.create' para crear una nueva persona
      }

      public function store(Request $request){// Método para almacenar una nueva persona en la base de datos
        $orders = OrderDetailModel::create($request->all());// Valida los datos de la solicitud y crea una nueva persona
        return redirect()->route('orders.index');// Redirige al usuario a la ruta 'peoples.index' después de almacenar la persona
      }
      public function show($id){
        $order = $this->dataServices->getById($id);
        return view('orderDetails.show', compact('order'));
      }

      public function edit(OrderDetailModel $orders){
        return view('orderDetails.edit', compact('orders'));

      }


      
}
