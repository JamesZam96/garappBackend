<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    //
    public function create(){
        return view('vehicles.create');
    }

    public function store(Request $request){
        $person = new Vehicle();
        $person->brand = $request->brand;
        $person->model = $request->model;
        $person->year = $request->year;
        $person->plate = $request->plate;
        $person->type = $request->type;
        $person->save();
        return redirect()->route('vehicle.create');
    }

    public function index(){
        $vehicles = Vehicle::orderBy('id','asc')->get();
        return view('vehicles.list', compact('vehicles'));
    }

    public function show(Vehicle $vehicle){
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle){
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request,Vehicle $vehicle){
        $vehicle->brand = $request->brand;
        $vehicle->model = $request->model;
        $vehicle->year = $request->year;
        $vehicle->plate = $request->plate;
        $vehicle->type = $request->type;
        $vehicle->save();
        return redirect()->route('vehicle.index');
    }

    public function destroy(Vehicle $vehicle){
        $vehicle->delete();
        return redirect()->route('vehicle.index');
    }
}
