<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return view('test');
});

Route::get('/crud', function(){

    $data = ['name' => 'Armando', 'age' => 33];

    return view('crud/index',$data);
})->name('crud');