<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'middleware' => ['auth', 'isAdmin'],
    'prefix'     => 'admin',  //tiền tố cho domain
    'namespace'  => 'Admin',  //tiền tố namespace
    'as'         => 'admin.',  //tiền tố của name route
], 
function () {
	Route::get('dashboard', 'HomeController@index')->name('dashboard'); //tức là 'admin.dashboard'
	Route::resource('categories', 'CategoryController');
	Route::resource('users', 'UserController');
	Route::resource('products', 'ProductController');
	Route::resource('comments', 'CommentController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
