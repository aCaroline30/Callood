<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'address_id' => ['sometimes', 'required', 'integer', 'exists:addresses,id'],
            'delivery_date' => ['sometimes', 'required', 'date'],
            'products' => ['sometimes', 'array', 'min:1'],
            'products.*.id' => ['required_with:products', 'integer', 'exists:products,id'],
            'products.*.quantity' => ['required_with:products', 'integer', 'min:1'],
        ];
    }
}
