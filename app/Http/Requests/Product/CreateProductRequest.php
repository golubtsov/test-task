<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'article' => ['required', 'string', 'unique:products,article', 'regex:/^[a-z]+$/i'],
            'name' => ['required', 'string'],
            'status' => ['required', 'int'],
            'namesAttributes' => ['array'],
            'valuesAttributes' => ['array'],
        ];
    }
}
