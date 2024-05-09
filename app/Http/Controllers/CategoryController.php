<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        $products= Product::all();
        $categories=Category::all();
    
        return view('categories.create');
    }

    public function store(Request $request){
        $category = new Category();
        $category->name=$request->name;
        $category->description=$request->description;
        $category->save();
        return redirect()->route('category.create');
    }

    public function index(){
        $categories = Category::orderBy('id','asc')->get();
        return view('categories.list', compact('categories'));
    }

    public function show(Category $category){
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category){
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request,Category $category){
        $category->name=$request->name;
        $category->description=$request->description;
        $category->save();
        return redirect()->route('category.index');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('category.index');
    }
}
