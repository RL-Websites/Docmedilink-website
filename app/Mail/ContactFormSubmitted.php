<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $formSubmission;

    public function __construct($formSubmission)
    {
        $this->formSubmission = $formSubmission;
    }

    public function build()
    {
        return $this->subject('New Contact Form Submission')
                    ->view('emails.contact_form_submitted')
                    ->with('formSubmission', $this->formSubmission);
    }
}
