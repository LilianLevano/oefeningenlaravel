<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/{module}/{difficulty}/{exo}', function ($module, $difficulty, $exo) {

    $module = strtolower($module);
    $difficulty = strtolower($difficulty);
    $exo = strtolower($exo);

    $path = "exercises.$module.$difficulty.$exo";



    return view($path);
})->where([
    'module' => '[A-Za-z0-9_-]+',
    'difficulty' => '[A-Za-z0-9_-]+',
    'exo' => '[A-Za-z0-9_-]+',
]);


Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);
Route::get('/extra/test', [\App\Http\Controllers\TestController::class, 'test']);
Route::get('/extra/oef8', [\App\Http\Controllers\Oefening8Controller::class, 'oef8']);
Route::get('/tasks', [\App\Http\Controllers\TaskController::class, 'index']);
Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index']);
Route::get('/articles/{article}', [\App\Http\Controllers\ArticleController::class, 'show']);
Route::get('/tasks/{task}', [\App\Http\Controllers\TaskController::class, 'show']);
Route::get('/users', [UserController::class , 'index'] );
Route::get('/users/{user}', [UserController::class , 'show']);
