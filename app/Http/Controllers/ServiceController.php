<?php

namespace App\Http\Controllers;

use App\Http\Services\DataServices;
use App\Models\ServiceModel;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Servicio de datos para interactuar con el modelo ServiceModel.
     *
     * @var DataServices
     */
    protected $dataServices;

    /**
     * Crea una nueva instancia del controlador.
     *
     * Inicializa el servicio de datos con el modelo ServiceModel.
     *
     * @return void
     */
    public function __construct()
    {
        $this->dataServices = new DataServices(new ServiceModel());
    }

    /**
     * Muestra una lista de servicios.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $services = $this->dataServices->getAll();
        return view('servicess.index', compact('services'));
    }
    /**
     * Almacena un nuevo servicio en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('servicess.create');
        }
        $service = $this->dataServices->create($request->all());
        return redirect()->route('services.index');
    }

    /**
     * Muestra los detalles de un servicio específico.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $service = $this->dataServices->getById($id);
        return view('servicess.show', compact('service'));
    }
    /**
     * Actualiza los datos de un servicio en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        if ($request->isMethod('get')) {
            $service = $this->dataServices->getById($id);
            return view('servicess.edit', compact('service'));
        }
        $service = $this->dataServices->update($id, $request->all());
        if (!$service) {
            abort(404, 'Service not found');
        }
        return redirect()->route('services.index');
    }

    /**
     * Elimina un servicio de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $service = $this->dataServices->delete($id);
        if (!$service) {
            abort(404, 'Service not found');
        }
        return redirect()->route('services.index');
    }
}
