<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //1 categoria pertence a muchos productos
    public function products(){
    	return $this->hasMany(Product::class);
	}
}
