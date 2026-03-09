<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CandidateContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $company;
    public $email;
    public $phone;

    public function __construct($company, $email, $phone)
    {
        $this->company = $company;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function build()
    {
        return $this
            ->subject('New Candidate Contact')
            ->view('emails.candidate-contact');
    }
}
