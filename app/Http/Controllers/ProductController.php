<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $product = new Product();
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->save();
        return redirect()->route('product.create');
    }

    public function index(){
        $products = Product::orderBy('id','asc')->get();
        return view('products.list', compact('products'));
    }

    public function show(Product $product){
        return view('products.show', compact('product'));
    }

    public function edit(Product $product){
        return view('products.edit', compact('product'));
    }

    public function update(Request $request,Product $product){
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;

        $product->save();
        return redirect()->route('product.index');
    }

    public function destroy(Product $category){
        $category->delete();
        return redirect()->route('category.index');
    }
}
