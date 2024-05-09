<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create(){
        return view('companies.create');
    }

    public function store(Request $request){
        $company = new Company();
        $company->nit=$request->nit;
        $company->companyName=$request->companyName;
        $company->address=$request->address;
        $company->email=$request->email;
        $company->save();
        return redirect()->route('company.create');
    }

    public function index(){
        $companies = Company::orderBy('id','asc')->get();
        return view('companies.list', compact('companies'));
    }

    public function show(Company $company){
        return view('companies.show', compact('company'));
    }

    public function edit(Company $company){
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request,Company $company){
        $company->nit=$request->nit;
        $company->companyName=$request->companyName;
        $company->address=$request->address;
        $company->email=$request->email;
        $company->save();
        return redirect()->route('company.index');
    }

    public function destroy(Company $company){
        $company->delete();
        return redirect()->route('company.index');
    }
}
