<?php

use Faker\Generator as Faker;
use App\Category;


$factory->define(Category::class, function (Faker $faker) {
    return [
        //
    	    'name'  => $faker->word,
    	    //'name' => 'abc', 
    	    //substr($faker->word(3),0,-1), 
    	    'description' => ucfirst($faker->sentence(10))
            //'image'  => $faker->imageUrl(250, 250), 
            //'category_id'=> $faker->numberBetween(1, 5)
    ];
});
