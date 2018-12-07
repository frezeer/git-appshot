<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;

class ProductController extends Controller
{
    //vista listado de productos
    public function index(){
    	// $products = Product::all();
    	$products = Product::paginate(50);
    	return view('admin.products.index')->with(compact('products'));
    	//listado
    }

    public function create(){
     	      return view('admin.products.create');
     }
    
      //formulario de edicion de registro
       public function edit($id)
     {
         	echo "Mostrar aqui el formulario de edicion con id $id";
         	$product = Product::find($id);
    	   	return view('admin.products.edit')->with(compact('product'));
     }

      public function destroy($id)
     {
          //CartDetail::where('product_id', $id)->delete();
          ProductImage::where('product_id', $id)->delete();
          //Borra primero la imagen asociada y despues borra el id del producto
          $product = Product::find($id);
          $product->delete(); // DELETE
        return back();
     }
    //registrar el producto en la bd
    public function store(Request $request)
     {
        //https://laravel.com/docs/5.5/validation#available-validation-rules
        //	dd($request->all());
        //validar
          $messages = [
          'name.required' =>        'Es Necesario Ingresar Un Nombre para el producto.',
          'description.required' => 'Es Necesario Ingresar una descripcion del producto.',
          'price.required' =>       'El Precio debe de tener un caracter valido'
          //'long_description' => 'required'
          ];

          
           $rules = [
          'name' => 'required|min:3',
          'description' => 'required:200',
          'price' => 'required|numeric|min:0'
          //'long_description' => 'required'
          ];
          $this->validate($request , $rules ,$messages);

          $request->all();
          $product = new Product();
          $product->name = $request->input('name');
          $product->description = $request->input('description');
          $product->price = $request->input('price');
          $product->long_description = $request->input('long_description');
          $product->save();
         return redirect('/admin/products');
     }

     //metodo para actualizar los productos por metooo post
      public function update(Request $request, $id)
     {
          //definimos los mensajes en español segun su validacion
          $messages = [
          'name.required' =>        'Es Necesario Ingresar Un Nombre para el producto.',
          'description.required' => 'Es Necesario Ingresar una descripcion del producto.',
          'price.required' =>       'El Precio debe de tener un caracter valido',
          'description.max'=>       'La descripcion corta solo admite 200 caracteres ',
          'price.required'=>        'Es obligatorio definir un precio del producto',
          'price.numeric'=>         'Ingrese un precio valido del producto',
          'price.min'=>             'No se Admiten valores negativos.'
          ];
           //https://laravel.com/docs/5.5/validation#available-validation-rules
           //definimos las reglas de validacion
           $rules = [
          'name'          => 'required|min:3',
          'description'   => 'required:200',
          'price'         => 'required|numeric|min:0'  
          ];
          $this->validate($request , $rules ,$messages);
            //dd($request->all()); //este es para imprimir el arreglo de request
             $request->all();
             $product = Product::find($id);
             $product->name = $request->input('name');
             $product->description = $request->input('description');
             $product->price = $request->input('price');
             $product->long_description = $request->input('long_description');
             $product->save();
         return redirect('/admin/products');
     }
}
