<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function welcome( ){
     return view('hello.welcome',[
        'name'=>'Sanju',
        'surname'=> 'Devadas'
     ]);
    }
}
