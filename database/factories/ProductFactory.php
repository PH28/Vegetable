<?php

use Faker\Generator as Faker;
use App\Category;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
	$categoryIds = Category::pluck('id');
    return [
        'name' => $faker->name,
        'price' => $faker->numberBetween(1000, 10000000),
        'quantity' => $faker->numberBetween(10, 100),
        'category_id' => $faker->randomElement($categoryIds),
        'description' => $faker->paragraph(10) 
    ];
});
