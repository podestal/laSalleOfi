<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrerasController extends Controller
{
    public function carreras(){
        return view('carrerasTecnicas') ;
    }

    public function farmacia(){
        return view('carreras.Farmacia') ;
    }

    public function protesisDental(){
        return view('carreras.protesisDental');
    }

    public function fisioterapiayRehabilitacion(){
        return view('carreras.FisioterapiaRehabilitacion');
    }

    public function entrenamientoDeportivo(){
        return view('carreras.EntrenamientoDeportivo');
    }
    
    public function enfermeria(){
        return view('carreras.Enfermeria');
    }

    public function optometria(){
        return view('carreras.Optometria');
    }
}
