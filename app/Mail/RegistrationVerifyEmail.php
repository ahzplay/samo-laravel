<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationVerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $verifiedToken, $statusToken, $email;
    public function __construct($param=array())
    {
        $this->email = $param['email'];
        $this->verifiedToken = $param['verifiedToken'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('noreply@samo.com','Sawit Mitra Online')
            ->with([
                'verifiedToken' => $this->verifiedToken,
                'email' => $this->email,
            ])
            ->view('registrationVerifyEmail');
    }
}
