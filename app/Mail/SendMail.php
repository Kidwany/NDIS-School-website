<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $username;
    public $app_code;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($username,$app_code)
    {
        $this->username = $username;
        $this->app_code = $app_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.mail');
    }
}
