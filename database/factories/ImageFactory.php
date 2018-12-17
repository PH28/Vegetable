<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(App\Image::class, function (Faker $faker) {
	$productIds = Product::pluck('id');
    return [
        'name'=>$faker->name,
        'path'=>$faker->imageUrl(240, 320),
        
    ];
});
