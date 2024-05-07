<?php

namespace App\Http\Controllers;
use App\Models\Person;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //
    public function create(){
        return view('people.create');
    }

    public function store(Request $request){
        $person = new Person();
        $person->name = $request->name;
        $person->lastname = $request->lastname;
        $person->address = $request->address;
        $person->phoneNumber = $request->phoneNumber;
        $person->email = $request->email;
        $person->save();
        //return redirect()->route('person.create');
        return response()->json(['message' => 'La persona ha sido creada', 'data' => $person]); 
    }

    public function index(){
        $people = Person::orderBy('id','asc')->get();
        return view('people.list', compact('people'));
    }

    public function show(Person $person){
        return view('people.show', compact('person'));
    }

    public function edit(Person $person){
        return view('people.edit', compact('person'));
    }

    public function update(Request $request,Person $person){
        $person->name = $request->name;
        $person->lastname = $request->lastname;
        $person->address = $request->address;
        $person->phoneNumber = $request->phoneNumber;
        $person->email = $request->email;
        $person->save();
        return redirect()->route('person.index');
    }

    public function destroy(Person $person){
        $person->delete();
        return redirect()->route('person.index');
    }
}
