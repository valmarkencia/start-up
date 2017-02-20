<?php

namespace App\Http\Controllers;

use App\Finance;
use App\User;
use App\Task;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
        $income = Finance::all()->sum('amount');
    	$users = User::all();
    	$tasks = Task::all();
    	return view('admin/dashboard', compact('users', 'tasks', 'income'));
    }
}
