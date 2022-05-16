<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailConfirmacao extends Mailable
{
    use Queueable, SerializesModels;

    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $nome = Auth::user()->name;
        return $this->view('confirmacaoreserva', ['nome' => $nome]);
    }
}
