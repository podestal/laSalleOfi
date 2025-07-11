<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransparenciaController extends Controller
{
    // ... Otros métodos del controlador ...

    public function academico()
    {
        return view('nosotros.Transparencia.Academico'); // Asume que la vista está en 'resources/views/transparencia/academico.blade.php'
    }
    public function acreditacion()
    {
        return view('nosotros.Transparencia.Acreditacion'); // Asume que la vista está en 'resources/views/transparencia/academico.blade.php'
    }
    public function becas()
    {
        return view('nosotros.Transparencia.Becas'); // Asume que la vista está en 'resources/views/transparencia/academico.blade.php'
    }
    public function licenciamiento()
    {
        return view('nosotros.Transparencia.licenciamiento'); // Asume que la vista está en 'resources/views/transparencia/academico.blade.php'
    }
    public function reglamento()
    {
        return view('nosotros.Transparencia.Reglamento'); // Asume que la vista está en 'resources/views/transparencia/academico.blade.php'
    }
    public function documentos()
    {
        return view('nosotros.Transparencia.Documentos'); // Asume que la vista está en 'resources/views/transparencia/academico.blade.php'
    }

    public function tasas()
    {
        return view('nosotros.Transparencia.Tasas'); // Asume que la vista está en 'resources/views/transparencia/academico.blade.php'
    }
    public function personal()
    {
        return view('nosotros.Transparencia.Personal'); // Asume que la vista está en 'resources/views/transparencia/academico.blade.php'
    }
    public function investigacion()
    {
        return view('nosotros.Transparencia.Investigacion'); // Asume que la vista está en 'resources/views/transparencia/academico.blade.php'
    }
}