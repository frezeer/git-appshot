<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //vista listado de productos
    public function index(){
    	// $products = Product::all();
    	$products = Product::paginate(10);
    	return view('admin.products.index')->with(compact('products'));
    	//listado
    }

    public function create(){
    	return view('admin.products.create');
    	//formulario de registro
    }
    //formulario de edicion de registro
    public function edit($id)
    {
    	echo "Mostrar aqui el formulario de edicion con id $id";
    	$product = Product::find($id);
		return view('admin.products.edit')->with(compact(product));
	}

 //    public function update(){
	// 	return view('admin.products.update');
	// //formulario de registro
	// }

    //registrar el producto en la bd
    public function store(Request $request)
    {
    	//dd($request->all());
    	$request->all();
    	$product = new Product();
    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->long_description = $request->input('long_description');
    	$product->save();
    	return redirect('/admin/products');
    }
}
