<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //1 imagen tiene 1 categoria 
    public function product(){
    	return $this->belongTo(Product::class);
    }
}
