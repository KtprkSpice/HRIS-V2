<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = task::all();
        return view('tasks.index', compact('tasks'));
    }
}
