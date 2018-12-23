<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'username' => 'Promickey',
    		'password' => bcrypt('admin'),
    		'email' => 'promickey@gmail.com',
    		'first_name' => 'Admin',
    		'avatar' => 'avatar',
    		'gender' => 'male',
    		'dob' => '1993-6-2',
    		'phone' => '0909090909',
    		'address' => '123 Nguyễn Trãi',
    		'role_id' => 1,

    	]);

        factory(App\User::class, 10)->create();
    }
}
