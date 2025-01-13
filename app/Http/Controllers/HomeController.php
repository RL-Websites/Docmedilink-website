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

    public function test()
    {
        $data['page_name'] = 'test';
        return view('frontend.test', $data);
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
        return view('frontend.clinicians', $data);
    }
    public function whyChooseDocmedilink()
    {
        $data['page_name'] = 'whyChooseDocmedilink';
        return view('frontend.whyChooseDocmedilink', $data);
    }



    public function contactFormSubmit(FormSubmissionRequest $request)
    {
        return $this->handleFormSubmission(
            $request->validated(),
            ContactSubmission::class,
            'docmedilink_web@yopmail.com',
            'email',
            ContactFormSubmitted::class
        );
    }

    public function cliniciansFormSubmit(ClinicSubmissionRequest $request)
    {
        return $this->handleFormSubmission(
            $request->validated(),
            ClinicSubmission::class,
            'docmedilink_web@yopmail.com',
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
