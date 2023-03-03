<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return view('home');//metodo view: Se dirigira a un archivo para mostrarnos el contenido html
    }
}
