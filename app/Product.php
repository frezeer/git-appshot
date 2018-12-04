<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //1 producto pertenece a una categoria
    public function category(){
    	return $this->belongsTo(Category::class);
	}
	//1 producto puede tener muchas imagenes
	public function imagen(){
    	return $this->hasMany(ProductImage::class);
    }
}
