<?php

namespace App\Http\Controllers;

use App\Mail\ReplyMail;
use App\Models\ClinicSubmission;
use App\Mail\ClinicFormSubmitted;
use App\Models\ContactSubmission;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\FormSubmissionRequest;
use App\Http\Requests\ClinicSubmissionRequest;

class HomeController extends Controller
{

    public function index()
    {
        $data['page_name'] = 'frontend_home';
        return view('frontend.index', $data);
    }

    public function whoWeServe()
    {
        $data['page_name'] = 'who_we_serve';
        return view('frontend.whoWeServe', $data);
    }

    // Method to handle the services page route
    public function services()
    {
        $data['page_name'] = 'services';
        return view('frontend.services', $data);
    }

    public function clinicians()
    {
        $data['page_name'] = 'clinicians';
        $data['dateTime'] = now()->format('Y-m-d\TH:i');
        return view('frontend.clinicians', $data);
    }

    public function whyChooseDocmedilink()
    {
        $data['page_name'] = 'whyChooseDocmedilink';
        return view('frontend.whyChooseDocmedilink', $data);
    }



    public function contactFormSubmit(FormSubmissionRequest $request)
    {
        $senderMail = env('SENDER_MAIL_ADDRESS') ?? 'docmedilink_web@yopmail.com';
        return $this->handleFormSubmission(
            $request->validated(),
            ContactSubmission::class,
            $senderMail,
            'email',
            ContactFormSubmitted::class
        );
    }

    public function cliniciansFormSubmit(ClinicSubmissionRequest $request)
    {
        $senderMail = env('SENDER_MAIL_ADDRESS') ?? 'docmedilink_web@yopmail.com';
        return $this->handleFormSubmission(
            $request->validated(),
            ClinicSubmission::class,
            $senderMail,
            'contact_email',
            ClinicFormSubmitted::class
        );
    }

    private function handleFormSubmission(array $validatedData, string $submissionClass, string $adminEmail, string $userEmailField, string $mailClass)
    {
        $submission = new $submissionClass();
        $submission->fill($validatedData);
        $submission->save();

        // Send emails
        Mail::to($adminEmail)->send(new $mailClass($submission));
        Mail::to($validatedData[$userEmailField])->send(new ReplyMail($submission));

        return response()->json(['success' => true, 'message' => 'Form submitted successfully']);
    }
}
