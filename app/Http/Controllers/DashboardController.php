<?php

namespace App\Http\Controllers;

use App\Models\ClinicSubmission;
use App\Models\ContactSubmission;
use App\Models\SeoMeta;

class DashboardController extends Controller
{
    public function index()
    {
        $data['contactFormSubmissions'] = ContactSubmission::paginate(10);
        return view('dashboard', $data);
    }

    public function clinicians()
    {
        $data['items'] = ClinicSubmission::paginate(10);
        return view('clinicians', $data);
    }

    public function seo()
    {
        $data['items'] = SeoMeta::all();
        return view('seo', $data);
    }
}
