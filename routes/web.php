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

Route::get('/', 'IndexController@index');

Route::get('portfolio', function(){
	return view('portfolio');
});

Route::get('/dashboard', 'AdminController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
