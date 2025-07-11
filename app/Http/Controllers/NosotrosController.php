<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function nosotros(){
        return view('nosotros.nosotros') ;
    }   

    public function bolsadeTrabajo(){
        return view('nosotros.bolsadeTrabajo') ;
    }

    public function proyectos(){
        return view('nosotros.proyectos');
    }
    public function autoridades(){
        return view('nosotros.autoridades');
    }

    public function transparencia(){
        return view('nosotros.transparencia');
    }

    public function titulacion(){
        return view('nosotros.titulacion');
    }
    public function bienestar(){
        return view('nosotros.bienestar');
    }
}

