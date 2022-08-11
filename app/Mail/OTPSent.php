<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OTPSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $otp;
    public $eid;

    public function __construct($otp, $eid)
    {
        $this->opt = $otp;
        $this->eid = $eid;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('system-mailer@bnb.bt')
                    ->subject('OTP for Employee Directory Information Edit')
                    ->view('email.otp')
                    ->text('email.otp_plain');
    }
}
