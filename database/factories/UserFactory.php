<?php

use Faker\Generator as Faker;
use App\Role;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
	
	$gender = $faker->randomElement(['male', 'female']);
    return [
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->unique()->userName,
        'password' => $faker->password,
        'first_name' => $faker->firstName($gender),
        'avatar' => $faker->imageUrl(50, 50),
        'gender' => $gender,
        'dob' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-10 years'),
        'phone'=> $faker->phoneNumber,
        'address' => $faker->address,
        'role_id' => 2,
        'remember_token' => str_random(10),
    ];
});
