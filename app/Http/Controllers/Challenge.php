<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Challenge extends Controller
{

    public function sum(float $a, float $b){
       return $a + $b;
    }

    public function substract(float $a, float $b){
        return $a - $b;
     }
    //
}
