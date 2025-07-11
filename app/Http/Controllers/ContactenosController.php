<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactenosController extends Controller
{
    public function __invoke()
    {
        // Si estás usando el controlador invocable para la vista principal:
        return view('contactenos');
    }

    public function enviar(Request $request)
    {
        // Validación de los datos
        $validatedData = $request->validate([
            'txtConsult' => 'required',
            'txtNames'   => 'required',
            'txtEmail'   => 'required|email',
            'txtPhone'   => 'nullable|regex:/^[0-9]+$/', 
        ]);

        // Enviar el correo
        Mail::to(['iestsanjuanbautistalasalle@gmail.com', 'sihuayrojohnherik@gmail.com'])
            ->send(new ContactMail($validatedData));

        // Retornar con un mensaje de éxito
        return back()->with('mensaje', 'Tu consulta ha sido enviada exitosamente.');
    }
}
