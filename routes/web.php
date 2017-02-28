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

Route::post('/subscribe', function(Request $request){

	$success = Mail::send('emails.subscribe', $request->toArray(), function ($message) {
        $message->to('valmarkencia@gmail.com')
        		->from('valmarkencia@gmail.com', 'You received a subsciption email from valenciamark.com:')
        		->subject('Subscription for valenciamark.com');
    });

	if(!$success){
		return Redirect::to(URL::previous() . "#form-response")->with('status', "Thank you for subscribing!");
	}
	else{
		return Redirect::to(URL::previous() . "#form-response")->with('failed', "Something went wrong. Please try again later!");
	}
});
Route::post('/sendmail', function(Request $request){

	$success = Mail::send('emails.contact', $request->toArray(), function ($message) {
        $message->to('valmarkencia@gmail.com')
        		->from('valmarkencia@gmail.com', 'You received a message from valenciamark.com:')
        		->subject('Message from valenciamark.com');
    });

	if(!$success){
		return redirect()->back()->with('sent-mail', "Message sent! Thank you for contacting me. I'll get back to you as soon as possible. Have a nice day!");
	}
	else{
		return redirect()->back()->with('error', "Something went wrong. Please try again later!");
	}
});

Route::get('/contact', 'IndexController@contact');
Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
Route::resource('/finances', 'FinancesController');
Route::get('proposals', 'ProposalController@index');
Route::get('proposals/create', 'ProposalController@create');
Route::post('proposals/create', 'ProposalController@store');
Route::resource('projects', 'ProjectsController');