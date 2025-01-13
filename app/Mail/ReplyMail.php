<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formSubmission;

    public function __construct($formSubmission)
    {
        $this->formSubmission = $formSubmission;
    }

    public function build()
    {
        return $this->subject('No reply')
            ->view('emails.reply_email')
            ->with([
                'first_name' => $this->formSubmission->first_name
            ]);
    }
}
