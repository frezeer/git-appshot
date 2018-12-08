<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //1 imagen tiene 1 categoria 
    public function product(){
    	return $this->belongTo(Product::class);
    }

    //Asociar imagenes
    public function getUrlAttribute()
    {
    		if (substr($this->images, 0 , 4) === "http")
			{
				return $this->images;
    		}
    	return '/images/products/'.$this->images;
    }	
}
