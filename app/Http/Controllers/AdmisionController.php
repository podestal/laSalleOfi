<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmisionController extends Controller
{
    public function __invoke(){
        //return "Bienvenido a la pagina principal";
        return view('admision');
    }
}
