<?php

namespace App\Http\Controllers;

use App\Http\Services\DataServices;
use App\Models\User;
use App\Models\WorkshopsModel;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    /**
     * Servicio de datos para interactuar con el modelo WorkshopModel.
     *
     * @var DataServices
     */
    protected $dataServices;

    /**
     * Crea una nueva instancia del controlador.
     *
     * Inicializa el servicio de datos con el modelo WorkshopModel.
     *
     * @return void
     */
    public function __construct()
    {
        $this->dataServices = new DataServices(new WorkshopsModel());
    }

    /**
     * Muestra una lista de talleres.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // $workshops = $this->dataServices->getAll();
        $workshops = WorkshopsModel::all();
        return view('workshop.index', compact('workshops'));
    }

    /**
     * Almacena un nuevo taller en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        
        if($request->isMethod('get')){

            $users = User::all();

            return view('workshop.create', compact("users"));
        }
        $workshop = $this->dataServices->create($request->all());
        return redirect()->route('workshop.index');
    }

    /**
     * Muestra los detalles de un taller específico.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $workshop = $this->dataServices->getById($id);
        return view('workshop.show', compact('workshop'));
    }

    /**
     * Actualiza los datos de un taller en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    { 
        if ($request->isMethod('get')) {
            $users = User::all();
            $workshop = $this->dataServices->getById($id);
            return view('workshop.edit', compact('workshop',"users"));
        }
        $workshop = $this->dataServices->update($id, $request->all());
        if (!$workshop) {
            abort(404, 'Workshop not found');
        }
        return redirect()->route('workshop.index');
    }

    /**
     * Elimina un taller de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $workshop = $this->dataServices->delete($id);
        if (!$workshop) {
            abort(404, 'Workshop not found');
        }
        return redirect()->route('workshop.index');
    }
}
