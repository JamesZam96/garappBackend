<?php

namespace App\Http\Controllers;

use App\Models\Deliveryman;
use App\Models\Person;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class DeliverymanController extends Controller
{
    //
    public function create(){
        $people = Person::all();
        $vehicles = Vehicle::all();
        return view('deliverymen.create',compact('people','vehicles'));
    }

    public function store(Request $request){
        $deliveryman = new Deliveryman();
        $deliveryman->licenseNumber = $request->licenseNumber;
        $deliveryman->person_id = $request->person_id;
        $deliveryman->vehicle_id = $request->vehicle_id;
        $deliveryman->save();
        return redirect()->route('deliveryman.create');
    }

    public function index(){
        $deliverymen = Deliveryman::orderBy('id','asc')->get();
        return view('deliverymen.list', compact('deliverymen'));
    }

    public function show(Deliveryman $deliveryman){
        return view('deliverymen.show', compact('deliveryman'));
    }

    public function edit(Deliveryman $deliveryman){
        return view('deliverymen.edit', compact('deliveryman'));
    }

    public function update(Request $request,Deliveryman $deliveryman){
        $deliveryman->licenseNumber = $request->licenseNumber;
        $deliveryman->person_id = $request->person_id;
        $deliveryman->vehicle_id = $request->vehicle_id;
        $deliveryman->save();
        return redirect()->route('deliveryman.index');
    }

    public function destroy(Deliveryman $deliveryman){
        $deliveryman->delete();
        return redirect()->route('deliveryman.index');
    }
}
