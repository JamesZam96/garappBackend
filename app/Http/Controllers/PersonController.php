<?php

namespace App\Http\Controllers;
use App\Models\People;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //
    public function create(){
        return view('people.create');
    }

    public function store(Request $request){
        $person = new People();
        $person->name = $request->name;
        $person->lastname = $request->lastname;
        $person->address = $request->address;
        $person->phoneNumber = $request->phoneNumber;
        $person->email = $request->email;
        $person->save();
        //return redirect()->route('person.create');
        return response()->json(['message' => 'La persona ha sido creada', 'data' => $person]); 
    }

    // public function index(){
    //     $people = People::orderBy('id','asc')->get();
    //     return view('people.list', compact('people'));
    // }
    

    public function show(People $person){
        return view('people.show', compact('person'));
    }

    public function edit(People $person){
        return view('people.edit', compact('person'));
    }

    public function update(Request $request,People $person){
        $person->name = $request->name;
        $person->lastname = $request->lastname;
        $person->address = $request->address;
        $person->phoneNumber = $request->phoneNumber;
        $person->email = $request->email;
        $person->save();
        return redirect()->route('person.index');
    }

    public function destroy(People $person){
        $person->delete();
        return redirect()->route('person.index');
    }
}
