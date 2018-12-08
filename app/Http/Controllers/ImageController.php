<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\productImage;

class ImageController extends Controller
{
    //
	public function index($id){
		echo "Mostrar aqui el formulario de edicion con id $id";
		$products = product::find($id);
		$images   = $products->images;
    	return view('admin.products.images.index')->with(compact('products','images'));
    }

    public function store(Request $request, $id)
    {
    	//guardar imagen en el proyecto
    	$file     = $request->file('photo');
    	$path     = public_path().'/images/products';
    	$fileName = uniqid().$file->getClientOriginalName();
    	$moved->move($path, $fileName);
    	//crear un registro en la tabla product images

    	if($moved)
    	{
    		//si se creo la imagen guarda
		    	$productImage = new productImage();
		    	$productImage->images = $fileName ;
		    	$productImage->product_id = $id;
		    	$productImage->save();
				return back();
		    	//echo $fileName;
		    	//$productImages->featured = false;
    	}
    	
    }

    public function destroy(){
    	//eliminar el archivo

    	//Eliminar el registro de la bd
    }


}
