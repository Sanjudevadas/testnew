<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product/{id}', function (string $id) {
    return "Product ID = $id";
});

Route::get('/service/{id}/{id2}', function (int $id, int $id2) {
    return "Sum = " . ($id + $id2);
});

Route::get('/sum/{a}/{b}',function(float $a, float $b){

    return $a+ $b;

})->whereNumber(['a','b']);

Route::get('/car',[CarController::class,'index']);