<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index() {
        return view('contact', ['name' => 'Juan']);
    }
    //Puede recibir argumentos por defecto , es decir si no se envía nada toma el valor por defecto $post=40
    function otro($post, $otro) {
        return "Mostrando el post número: " . $post . " y el otro parámetro es: " . $otro;
    }
}
