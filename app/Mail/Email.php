<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    var $data;
    var $user;
    var $type;
    var $codigo;

    /**
     * Create a new message instance.
     */
    public function __construct($data, $user, $type, $codigo)
    {
        $this->data = $data;
        $this->user = $user;
        $this->type = $type;
        $this->codigo = $codigo;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        if ($this->type == 1) {
            return new Envelope(
                subject: 'Código De Verificación' ,
            );
        }elseif ($this->type == 2 ) {
            return new Envelope(
                subject: 'Recuperando Contraseña' ,
            );
        }
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        if ($this->type == 1) {
            return new Content(
                view: 'plantillasCorreos.correoAutenticacion',
            );
        }elseif ($this->type == 2) {
            return new Content(
                view: 'plantillasCorreos.correoContrasena',
            );
        }
       
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
