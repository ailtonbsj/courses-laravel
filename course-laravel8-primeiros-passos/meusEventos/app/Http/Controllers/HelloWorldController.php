<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    function helloWorld(){
        return view('hello-world');
    }

    function hello($name = 'Fulano') {
        return "<h1>Bem vindo $name</h1>";
    }
}
