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
            'date_of_death' => 'required|date|after:date_of_birth'
        ];
    }
}