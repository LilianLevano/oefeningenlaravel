<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Task;
use Illuminate\Http\Request;
use PDO;

class TaskController extends Controller
{

    public function index(){



        $tasks = Task::all();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function show($id){
        $task = Task::where('id', $id)->firstOrFail();

        return view('tasks.show', ['task' => $task] );
    }

}
