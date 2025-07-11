<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WorkApplicationMail;

class TrabajeconNosotrosController extends Controller
{
    public function __invoke()
    {
        //return "Bienvenido a la pagina principal";
        return view('trabajeconNosotros');
    }

    public function enviar(Request $request)
{
    // Validación de los datos
    $validatedData = $request->validate([
        'txtNamesWork'       => 'required',
        'txtEmailWork'       => 'required|email',
        'txtPhoneWork'       => 'nullable|regex:/^[0-9]+$/', // Permite cualquier cantidad de dígitos
        'txtEspecialtyWork'  => 'nullable',
        'txtCourseWork'      => 'nullable',
        'txtFileWork'        => 'required|mimes:pdf|max:2048',
        'txtDescriptionWork' => 'nullable',
    ]);

    // Guardar el archivo CV, si se requiere
    if ($request->hasFile('txtFileWork')) {
        $filePath = $request->file('txtFileWork')->store('cvs', 'public');
        $validatedData['cv_path'] = $filePath;
    }

    // Enviar el correo a franm907@gmail.com
    Mail::to(['iestsanjuanbautistalasalle@gmail.com', 'sihuayrojohnherik@gmail.com'])
        ->send(new WorkApplicationMail($validatedData));
    

    return back()->with('mensaje', 'Tu postulación ha sido enviada exitosamente.');
}

}
