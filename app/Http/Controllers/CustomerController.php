<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\People;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function create(){
        $people = People::all();
        $vehicles = Vehicle::all();
        return view('customers.create',compact('people','vehicles'));
    }

    public function store(Request $request){
        $customer = new Customer();
        $customer->person_id = $request->person_id;
        $customer->vehicle_id = $request->vehicle_id;
        $customer->save();
        return redirect()->route('customer.create');
    }

    public function index(){
        $customers = Customer::orderBy('id','asc')->get();
        return view('customers.list', compact('customers'));
    }

    public function show(Customer $customer){
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer){
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request,Customer $customer){
        $customer->person_id = $request->person_id;
        $customer->vehicle_id = $request->vehicle_id;
        $customer->save();
        return redirect()->route('customer.index');
    }

    public function destroy(Customer $customer){
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
