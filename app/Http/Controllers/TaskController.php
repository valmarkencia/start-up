<?php


namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
    	$tasks = Task::all();
    	return view('tasks.tasks', compact ('tasks'));
    }

    public function create(){
    	
    }
}
