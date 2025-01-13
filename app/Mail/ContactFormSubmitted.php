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
            ->with([
                'first_name' => $this->formSubmission->first_name,
                'email' => $this->formSubmission->email,
                'phone' => $this->formSubmission->phone,
                'details' => $this->formSubmission->details,
            ]);
    }
}
