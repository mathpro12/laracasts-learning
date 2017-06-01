<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = Task::all();

    	return view('welcome')->with(compact('tasks'));
    }

    public function show(Task $task)
    {
    	return view('zoom', compact('task'));
    }
}
