<?php

use Illuminate\Http\Request;
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

Route::post('/sendmail', 'EmailController@sendmail');
Route::post('/subscribe', 'EmailController@subscribe');

Route::get('/works', 'IndexController@works');
Route::get('/contact', 'IndexController@contact');
Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
Route::resource('/finances', 'FinancesController');
Route::get('proposals', 'ProposalController@index');
Route::get('proposals/create', 'ProposalController@create');
Route::post('proposals/create', 'ProposalController@store');
Route::resource('projects', 'ProjectsController');