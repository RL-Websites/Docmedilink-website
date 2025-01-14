<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClinicSubmissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
            'clinic_name' => 'nullable|string|max:255',
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'required|email|unique:clinic_submissions,contact_email',
            'contact_phone' => 'nullable|string|max:20',
            'specialization' => 'nullable|string|max:255',
            'practice_size' => 'nullable|string|max:255',
            'telehealth' => 'nullable|string',
            'preferred_demo_time' => 'nullable',
            'about_us' => 'nullable|string|max:255',
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
            'contact_name.required' => 'The contact name field is required.',
            'contact_email.required' => 'The contact email field is required.',
            'contact_email.email' => 'Please provide a valid email address.',
            'contact_email.unique' => 'This email is already associated with another submission.',
            'contact_phone.max' => 'The phone number may not be greater than 20 characters.',
            'specialization.max' => 'The specialization may not be greater than 255 characters.',
            'practice_size.max' => 'The practice size may not be greater than 255 characters.',
            'telehealth.max' => 'The telehealth description may not be greater than 255 characters.',
            'preferred_demo_time.max' => 'The preferred demo time may not be greater than 255 characters.',
            'about.max' => 'The description for how you heard about us may not be greater than 255 characters.',
        ];
    }
}
