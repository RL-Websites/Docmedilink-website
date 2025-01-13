<?php

namespace App\Http\Controllers;

use App\Models\ClinicSubmission;
use App\Models\ContactSubmission;
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
        $formType = 'contact';
        $formSubmission = new ContactSubmission();
        $formSubmission->fill($request->validated());
        $formSubmission->save();
        return response()->json(['success' => true, "message" => 'Form submitted successfully']);
    }

    public function cliniciansFormSubmit(ClinicSubmissionRequest $request)
    {
        $clinicSubmission = new ClinicSubmission();
        $clinicSubmission->fill($request->validated());
        $clinicSubmission->save();
        return response()->json(['success' => true, 'message' => 'Form submitted successfully']);
    }
}
