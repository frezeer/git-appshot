<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
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

    public function store(){
    	return view('');
    	//registrar el producto en la bd
    }
}
