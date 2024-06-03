<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeople;
use App\Http\Services\DataServices;
use App\Models\CustomerModel;
use App\Models\PeopleModel;
use App\Models\ProfileModel;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Servicio de datos para interactuar con el modelo PeopleModel.
     *
     * @var DataServices
     */
    protected $dataServices;

    /**
     * Crea una nueva instancia del controlador.
     *
     * Inicializa el servicio de datos con el modelo PeopleModel.
     *
     * @return void
     */
    public function __construct()
    {
        $this->dataServices = new DataServices(new ProfileModel());
    }

    /**
     * Muestra una lista de personas.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $profiles = $this->dataServices->getAll();
        $customers = CustomerModel::with('profile')->get();
        return view('profile.index', compact('profiles', 'customers'));
    }
    /**
     * Almacena una nueva persona en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->isMethod('get')) {
            $user = User::all();
            return view('profile.create', compact('user'));
        }

        $profile = $this->dataServices->create($request->all());
        
        return redirect()->route('profiles.index');
    }

    /**
     * Muestra los detalles de una persona específica.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $profile = $this->dataServices->getById($id);
        return view('profile.show', compact('profile'));
    }
    /**
     * Actualiza los datos de una persona en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        if ($request->isMethod('get')) {
            $profile = $this->dataServices->getById($id);
            return view('profile.edit', compact('profile'));
        }
        $profile = $this->dataServices->update($id, $request->all());
        if (!$profile) {
            abort(404, 'Order not found');
        }
        return redirect()->route('profiles.index');
    }

    /**
     * Elimina una persona de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $profile = $this->dataServices->delete($id);
        if (!$profile) {
            abort(404, 'Order not found');
        }
        return redirect()->route('profiles.index');
    }
}
