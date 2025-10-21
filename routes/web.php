<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {

    //es lo mismo redirect->route que to_route
    //return redirect()->route('contact2');
    //return to_route('contact2');
    // // //
    //return redirect('/contact2');

    return view('contact', ['name' => 'Juan']);
})->name('contact');

Route::get('/contact2', function () {
    return view('contact2');
})->name('contact2');

