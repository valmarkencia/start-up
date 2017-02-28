<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

    		return view('index');
    	}

    public function contact(){
    	return view('contact');
    }
}
