<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{  
    public function index(){
        return view('home.index',[
            'name' => 'Sanju',
            'surname' => 'Devedas'
            ,
            'cars'=> 2,
            'hobbies'=>['playing','coding','movies']
        ]);
    }
  
}
