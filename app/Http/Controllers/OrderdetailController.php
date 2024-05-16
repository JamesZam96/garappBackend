<?php

namespace App\Http\Controllers;

use App\Http\Services\DataServices;
use App\Models\OrderDetailModel;
use Illuminate\Http\Request;

/**
 * Controlador para manejar los detalles de los pedidos.
 *
 * Este controlador gestiona las operaciones CRUD (crear, leer, actualizar, eliminar)
 * relacionadas con los detalles de los pedidos en la aplicación.
 */
class OrderDetailController extends Controller
{
    /**
     * Servicio de datos para el controlador.
     *
     * @var DataServices
     */
    protected $dataServices;

    /**
     * Constructor del controlador.
     */
    public function __construct()
    {
        // Inicializar el servicio de datos con el modelo OrderDetailModel
        $this->dataServices = new DataServices(new OrderDetailModel());
    }

    /**
     * Mostrar una lista de todos los detalles de los pedidos.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $orders = $this->dataServices->getAll();
        return view('orderDetails.index', compact('orders'));
    }

    /**
     * Mostrar el formulario para crear un nuevo detalle de pedido.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('orderDetails.create');
    }

    /**
     * Almacenar un nuevo detalle de pedido en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $orders = $this->dataServices->create($request->all());
        return redirect()->route('orders.index');
    }

    /**
     * Mostrar los detalles de un pedido específico.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $order = $this->dataServices->getById($id);
        return view('orderDetails.show', compact('order'));
    }

    /**
     * Mostrar el formulario para editar un detalle de pedido existente.
     *
     * @param  OrderDetailModel  $order
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(OrderDetailModel $order)
    {
        return view('orderDetails.edit', compact('order'));
    }

    /**
     * Actualizar los detalles de un pedido en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $order = $this->dataServices->update($id, $request->all());
        if (!$order) {
            abort(404, 'Order not found');
        }
        return redirect()->route('orders.index');
    }

    /**
     * Eliminar un detalle de pedido de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $order = $this->dataServices->delete($id);
        if (!$order) {
            abort(404, 'Order not found');
        }
        return redirect()->route('orders.index');
    }
}
