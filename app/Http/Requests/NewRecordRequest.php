<?php

namespace App\Http\Requests;

use App\Models\Grave;
use Illuminate\Foundation\Http\FormRequest;

class NewRecordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required|string|max:255',
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
            'date_of_birth' => 'required|date',
            'date_of_death' => 'required|date',
            'cause_of_death' => 'required|string',
            'age' => 'numeric|required|min:1|max:150',
            'gender' => 'in:M,F|required',
            'address' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'The full name field is required.',
            'grave_number.required' => 'The grave number field is required.',
            'grave_number.exists' => 'The selected grave number is invalid.',
            'date_of_birth.required' => 'The date of birth field is required.',
            'date_of_death.required' => 'The date of death field is required.',
            'cause_of_death.required' => 'The cause of death is required.',
            'age.required' => 'The age field is required.',
            'age.numeric' => 'The age must be a number.',
            'gender.required' => 'The gender is required',
            'address.required' => "The address is required"
        ];
    }
}