<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $person = "Lilian";
        $age = 18;

        $hobbies = ["koken", "fietsen", "iets anders"];

        $family = [
            ['name' => 'Lilian', 'gender' => 'male'],
            ['name' => 'Marc', 'gender' => 'male'],
            ['name' => 'Deborah', 'gender' => 'female'],
        ];

        $familyAsObject = [
            (object) ['name' => 'Lilian', 'gender' => 'male'],
            (object) ['name' => 'Marc', 'gender' => 'male'],
            (object) ['name' => 'Deborah', 'gender' => 'female'],
        ];

        return view('about', ['person' => $person, 'age' => $age, 'hobbies' => $hobbies, 'family' => $family, 'familyAsObject' => $familyAsObject]);
    }
}
