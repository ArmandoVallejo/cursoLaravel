<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact', ['nombre' => 'Juan']);
})->name('contact');

Route::get('/contact2', function () {
    return view('contact2');
})->name('contact2');

