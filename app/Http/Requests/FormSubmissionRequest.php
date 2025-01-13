<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormSubmissionRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'email' => 'nullable|email|unique:contact_submissions,email',
            'phone' => 'required|string',
            'services' => 'required|in:Telehealth Platform,Physician Services,Pharmacy Services,Partnership Opportunities',
            'about' => 'required|in:Customer,Provider,Partner',
            'details' => 'nullable|string',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'company_name.required' => 'Company name is required.',
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please provide a valid email address.',
            'phone.required' => 'Phone number is required.',
            'services.required' => 'Please select a service.',
            'about.required' => 'Please indicate your role.',
        ];
    }
}
