<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $testoEmail; //variabile visibile direttamente nella view.

    public function __construct($testoEmail)
    {
      $this -> testoEmail = $testoEmail;
    }

    public function build()
    {
        return $this
        -> from('no-reply@gnegne.com')
        -> view('mails.mailTest');
    }
}
