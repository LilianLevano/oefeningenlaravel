<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class TaskController extends Controller
{

    public function index(){



        $pdo = new PDO('sqlite:' . __DIR__ . '/../../../database/database.sqlite');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->query("SELECT * FROM tasks");
        $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return view('task', ['tasks' => $tasks]);
    }

}
