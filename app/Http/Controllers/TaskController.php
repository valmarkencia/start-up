<?php


namespace App\Http\Controllers;

use App\Task;
use Request;

class TaskController extends Controller
{
    public function index(){
    	$tasks = Task::all();
    	return view('tasks.tasks', compact ('tasks'));
    }

    public function create(){
    	//
    }

    public function store()
    {
    	$input = Request::all();
    	
    	Task::create($input);

    	return redirect('tasks');
    }
}
