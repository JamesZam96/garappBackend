<?php

namespace App\Http\Controllers;

use App\Http\Services\DataServices;
use App\Models\WarehouseModel;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{ 
    protected $dataServices;

    public function __construct()
    {
        // Inicializar el servicio de datos con el modelo CompanyModel
        $this->dataServices = new DataServices(new WarehouseModel());
    }

    public function index()
    {
        // Recupera todas las compañías ordenadas por ID de forma descendente y paginadas
        $warehouse = $this->dataServices->getAll();
        // Devuelve la vista 'warehouse.index' pasando las compañías recuperadas
        return view('warehouse.index', compact('warehouse'));
    }

    public function create()
    {
        // Devuelve la vista 'warehouse.create' para crear un nuevo almacén
        return view('warehouse.create');
    }

    public function store(Request $request)
    {
        // Valida los datos de la solicitud y crea un nuevo almacén
        $warehouse = $this->dataServices->create($request->all());
        // Redirige al usuario a la ruta 'warehouse.index' después de almacenar el almacén
        return redirect()->route('warehouse.index');
    }

    public function show($id)
    {
        // Encuentra la compañía por su ID y la pasa a la vista 'warehouse.show'
        $warehouse = $this->dataServices->getById($id);
        return view('warehouse.show', compact('warehouse'));
    }

    public function edit(WarehouseModel $warehouse)
    {
        // Pasa la compañía a la vista 'warehouse.edit' para su edición
        return view('warehouse.edit', compact('warehouse'));
    }

    public function update(Request $request, $id)
    {
        // Valida los datos de la solicitud y actualiza la compañía
        $warehouse = $this->dataServices->update($id, $request->all());
        if (!$warehouse) {
            abort(404, 'warehouse not found');
        }
        // Redirige al usuario a la ruta 'warehouse.index' después de actualizar la compañía
        return redirect()->route('warehouse.index');
    }

    public function destroy($id)
    {
        // Encuentra la compañía por su ID y la elimina
        $warehouse = $this->dataServices->delete($id);
        if (!$warehouse) {
            // Si la compañía no existe, devuelve una respuesta con un mensaje de error
            abort(404, 'warehouse not found');
        }
        // Redirige al usuario a la ruta 'warehouse.index' después de eliminar la compañía
        return redirect()->route('warehouse.index');
    }
}
