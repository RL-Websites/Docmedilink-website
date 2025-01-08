<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Method to handle the homepage route
    public function index()
    {
        $data['page_name'] = 'frontend_home';
        return view('frontend.index', $data);
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

    public function formSubmit(Request $request) {
        dd($$request->all());
    }
}
