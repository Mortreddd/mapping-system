<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Grave;

class NewReservationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'contact_number' => 'required',
            'relationship' => 'required',
            'deceased_full_name' => 'required|max:255',
            'grave_number' => [
                'required',
                'exists:graves,grave_number',
                function ($attribute, $value, $fail) {
                    $grave = Grave::where('grave_number', $value)
                                ->whereNotIn('status', ['reserved', 'occupied'])
                                ->first();
                    if (!$grave) {
                        $fail('This grave is not available for reservation.');
                    }
                }
            ],
            'date_of_birth' => 'required|date|before:date_of_death',
            'date_of_death' => 'required|date|after:date_of_birth',
            'cause_of_death' => 'required|string',
            'age' => 'required|numeric|min:1|max:150',
            'address' => 'required|string',
            'gender' => 'in:M,F|required'
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Full name is required.',
            'full_name.max' => 'Full name may not be greater than 255 characters.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.max' => 'Email may not be greater than 255 characters.',
            'contact_number.required' => 'Contact number is required.',
            'relationship.required' => 'Relationship is required.',
            'deceased_full_name.required' => 'Deceased full name is required.',
            'deceased_full_name.max' => 'Deceased full name may not be greater than 255 characters.',
            'grave_number.required' => 'Grave number is required.',
            'grave_number.exists' => 'The selected grave number does not exist.',
            'date_of_birth.required' => 'Date of birth is required.',
            'date_of_birth.date' => 'Date of birth must be a valid date.',
            'date_of_birth.before' => 'Date of birth must be before the date of death.',
            'date_of_death.required' => 'Date of death is required.',
            'date_of_death.date' => 'Date of death must be a valid date.',
            'date_of_death.after' => 'Date of death must be after the date of birth.',
            'cause_of_death.required' => 'Cause of death is required.',
            'cause_of_death.string' => 'Cause of death must be a string.',
            'age.required' => 'Age is required.',
            'age.numeric' => 'Age must be a number.',
            'age.min' => 'Age must be at least 1.',
            'age.max' => 'Age may not be greater than 150.',
            'address.required' => 'Address is required.',
            'address.string' => 'Address must be a string.',
            'gender.required' => 'Gender is required.',
            'gender.in' => 'Gender must be either M or F.',
        ];
    }

}