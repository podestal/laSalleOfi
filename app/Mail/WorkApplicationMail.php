<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WorkApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    // Propiedad para los datos
    public $data;

    /**
     * Recibe los datos en el constructor
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Define el "sobre" del correo (asunto, etc.)
     */
    public function build()
{
    return $this->subject('Nueva Postulación - Trabaje con Nosotros')
                ->view('emails.work_application')
                ->attach(storage_path('app/public/' . $this->data['cv_path']), [
                    'as' => 'MiCV.pdf',
                    'mime' => 'application/pdf',
                ]);
}

    /**
     * Define el contenido (vista o markdown) del correo
     */
    

    /**
     * Si deseas adjuntar archivos, puedes usar attachments()
     */
    public function attachments(): array
    {
        //Ejemplo si deseas adjuntar un archivo PDF
        return [
            Attachment::fromPath(storage_path('app/public/' . $this->data['cv_path']))
                ->as('MiCV.pdf')
                 ->withMime('application/pdf')
         ];
        //return [];
    }
}
