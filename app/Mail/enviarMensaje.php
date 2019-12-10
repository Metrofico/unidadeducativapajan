<?php

namespace App\Mail;

use App\Contactanos;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class enviarMensaje extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contactanos;
    public $subject;

    public function __construct(Contactanos $contactanos, $subject)
    {
        //
        $this->contactanos = $contactanos;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.enviarContacto')->subject($this->subject);
    }
}
