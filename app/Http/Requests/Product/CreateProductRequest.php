<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $this->merge([
            'article' => strip_tags($this->get('article')),
            'name' => strip_tags($this->get('name')),
            'status' => strip_tags($this->get('status')),
        ]);
    }

    public function rules(): array
    {
        return [
            'article' => [
                'required',
                'string',
                'unique:products,article',
                'regex:/^[a-z,1-9]+$/i',
                'min:5',
            ],
            'name' => ['required', 'string', 'min:10'],
            'status' => ['required', 'int'],
            'namesAttributes' => ['array', 'required'],
            'valuesAttributes' => ['array', 'required'],
        ];
    }

    public function messages(): array
    {
        return [
            'article.required' => __('products.errors.required', ['field' => __('products.table.article')]),
            'article.unique' => __('products.errors.unique', ['field' => __('products.table.article')]),
            'article.regex' => __('products.errors.regex.lat', ['field' => __('products.table.article')]),
            'article.string' => __('products.errors.string', ['field' => __('products.table.article')]),
            'article.min' => __('products.errors.min', [
                'field' => __('products.table.article'),
                'number' => 5,
            ]),
            'name.required' => __('products.errors.required', ['field' => __('products.table.name')]),
            'name.string' => __('products.errors.string', ['field' => __('products.table.name')]),
            'name.min' => __('products.errors.min', [
                'field' => __('products.table.name'),
                'number' => 10,
            ]),
            'status.required' => __('products.errors.required', ['field' => __('products.table.status.text')]),
            'namesAttributes.array' => __('products.errors.required'),
            'namesAttributes.required' => __('products.errors.required'),
            'valuesAttributes.array' => __('products.errors.attributes'),
            'valuesAttributes.required' => __('products.errors.attributes'),
        ];
    }
}
