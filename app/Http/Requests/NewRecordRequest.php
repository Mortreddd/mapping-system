<?php

namespace App\Http\Requests;

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
            'grave_number' => 'required|exists:graves,grave_number',
            'born_date' => 'required|date',
            'died_on' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'The full name field is required.',
            'grave_number.required' => 'The grave number field is required.',
            'grave_number.exists' => 'The selected grave number is invalid.',
            'born_date.required' => 'The born date field is required.',
            'died_on.required' => 'The died on field is required.',
        ];
    }
}