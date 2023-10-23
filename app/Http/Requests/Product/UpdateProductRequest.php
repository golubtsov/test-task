<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $this->merge([
            'article' =>  strip_tags($this->get('article')),
            'name' =>  strip_tags($this->get('name')),
            'status' =>  strip_tags($this->get('status')),
        ]);
    }

    public function rules(): array
    {
        $productId = (int)array_reverse(explode('/', $this->getRequestUri()))[1];

        return [
            'article' => [
                'required',
                'string',
                'regex:/^[a-z,1-9]+$/i',
                Rule::unique('products', 'article')->ignore($productId)
            ],
            'name' => ['required', 'string'],
            'status' => ['required', 'int'],
            'namesAttributes' => ['array'],
            'valuesAttributes' => ['array'],
        ];
    }

    public function messages(): array
    {
        return [
            'article.required' => __('products.errors.required', ['field' => __('products.table.article')]),
            'article.unique' => __('products.errors.unique', ['field' => __('products.table.article')]),
            'article.regex' => __('products.errors.regex.lat', ['field' => __('products.table.article')]),
            'article.string' => __('products.errors.string', ['field' => __('products.table.article')]),
            'name.required' => __('products.errors.required', ['field' => __('products.table.name')]),
            'name.string' => __('products.errors.string', ['field' => __('products.table.name')]),
            'status.required' => __('products.errors.required', ['field' => __('products.table.status.text')]),
            'namesAttributes.array' => __('products.errors.required'),
            'valuesAttributes.array' => __('products.errors.required'),
        ];
    }
}
