<?php

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


