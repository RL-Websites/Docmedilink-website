<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClinicFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $formSubmission;

    public function __construct($formSubmission)
    {
        $this->formSubmission = $formSubmission;
    }

    public function build()
    {
        return $this->subject('New Clinic Form Submission')
            ->view('emails.clinic_form_submitted')
            ->with([
                'first_name' => $this->formSubmission->contact_name,
                'email' => $this->formSubmission->contact_email,
                'phone' => $this->formSubmission->contact_phone,
                'details' => $this->formSubmission->about_us,
            ]);
    }
}
