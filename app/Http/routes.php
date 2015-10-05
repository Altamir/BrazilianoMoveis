<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('home', function () {
    return view('index');
});

Route::get('fale-conosco', function () {
    return view('fale_conosco');
});

Route::get('marcas',function(){
    return view('marcas');
});

Route::get('quem-somos',function(){
    return view('quem_somos');
});

Route::get('produtos',function(){
    return view('produtos');
});
