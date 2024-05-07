<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function create(){
        return view('customers.create');
    }

    public function store(Request $request){
        $customer = new Customer();
        $customer->person_id = $request->person_id;
        $customer->vehicle_id = $request->vehicle_id;
        $customer->save();
        return redirect()->route('customers.create');
    }

    public function index(){
        $customers = Customer::orderBy('id','asc')->get();
        return view('customers.list', compact('customers'));
    }

    public function show(Customer $customer){
        return view('customers.show', compact('custome$customer'));
    }

    public function edit(Customer $customer){
        return view('customers.edit', compact('custome$customer'));
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
