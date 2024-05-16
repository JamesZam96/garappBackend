<?php

namespace App\Http\Controllers;

use App\Http\Services\DataServices;
use App\Models\CompanyModel;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    protected $dataServices;

    public function __construct()
    {
        // Inicializar el servicio de datos con el modelo CompanyModel
        $this->dataServices = new DataServices(new CompanyModel());
    }

    public function index()
    {
        // Recupera todas las compañías ordenadas por ID de forma descendente y paginadas
        $companys = $this->dataServices->getAll();
        // Devuelve la vista 'company.index' pasando las compañías recuperadas
        return view('company.index', compact('companys'));
    }

    public function create()
    {
        // Devuelve la vista 'company.create' para crear un nuevo almacén
        return view('company.create');
    }

    public function store(Request $request)
    {
        // Valida los datos de la solicitud y crea un nuevo almacén
        $company = $this->dataServices->create($request->all());
        // Redirige al usuario a la ruta 'company.index' después de almacenar el almacén
        return redirect()->route('companys.index');
    }

    public function show($id)
    {
        // Encuentra la compañía por su ID y la pasa a la vista 'company.show'
        $company = $this->dataServices->getById($id);
        return view('company.show', compact('company'));
    }

    public function edit(CompanyModel $company)
    {
        // Pasa la compañía a la vista 'company.edit' para su edición
        return view('company.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        // Valida los datos de la solicitud y actualiza la compañía
        $company = $this->dataServices->update($id, $request->all());
        if (!$company) {
            abort(404, 'Company not found');
        }
        // Redirige al usuario a la ruta 'company.index' después de actualizar la compañía
        return redirect()->route('companys.index');
    }

    public function destroy($id)
    {
        // Encuentra la compañía por su ID y la elimina
        $company = $this->dataServices->delete($id);
        if (!$company) {
            // Si la compañía no existe, devuelve una respuesta con un mensaje de error
            abort(404, 'Company not found');
        }
        // Redirige al usuario a la ruta 'company.index' después de eliminar la compañía
        return redirect()->route('companys.index');
    }
}
