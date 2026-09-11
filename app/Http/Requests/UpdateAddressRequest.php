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
            'complement'   => ['sometimes', 'nullable', 'string', 'max:255'],
            'neighborhood' => ['sometimes', 'required', 'string', 'max:255'],
            'city'         => ['sometimes', 'required', 'string', 'max:255'],
            'state'        => ['sometimes', 'required', 'string', 'size:2'],
            'zip_code'     => ['sometimes', 'required', 'string', 'max:10'],
        ];
    }
}
