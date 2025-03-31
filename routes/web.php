<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\Challenge;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});




Route::get('/about', function () {
    return view('about');
});



Route::controller(CarController::class)->group(function(){
    Route::get('/car','index');
    Route::get('/my-car','myCars');


});

Route::resource('/products', ProductController::class);

Route::controller(Challenge::class)->group(function () {
    Route::get('/sum/{a}/{b}', 'sum')->whereNumber(['a','b']);
    Route::get('/substract/{a}/{b}', 'substract')->whereNumber(['a','b']);

});