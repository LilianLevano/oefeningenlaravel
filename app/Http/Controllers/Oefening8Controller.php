<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Oefening8Controller extends Controller
{


    public function oef8(){

        $products = [
            ['product' => 'Banaan', 'price' => 1, 'description' => 'Een fruit'],
            ['product' => 'Appel', 'price' => 2, 'description' => 'Een fruit'],
            ['product' => 'GSM', 'price' => 500, 'description' => 'Een Iphone'],
            ['product' => 'SmartWatch', 'price' => 140, 'description' => 'Een Horloge'],

        ];
        return view('exercises.module1.extra.oef8', ['products' => $products]);
    }
}
