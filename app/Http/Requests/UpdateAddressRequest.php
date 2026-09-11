<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAddressRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'street'       => ['sometimes', 'required', 'string', 'max:255'],
            'number'       => ['sometimes', 'required', 'string', 'max:20'],
            'city'         => ['sometimes', 'required', 'string', 'max:255'],
        ];
    }
}
