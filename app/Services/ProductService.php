<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public static function create(array $data)
    {
        $attributes = self::createAttributes($data['namesAttributes'], $data['valuesAttributes']);

        return Product::query()
            ->create([
                'article' => $data['article'],
                'name' => $data['name'],
                'status' => $data['status'],
                'data' => $attributes,
            ]);
    }

    private static function createAttributes(array $namesAttributes, array $valuesAttributes): array
    {
        /** @var array $attributes */

        foreach ($namesAttributes as $index => $attribute) {
            $attributes[] = [
                'name' => $attribute,
                'value' => $valuesAttributes[$index],
            ];
        }

        return $attributes;
    }
}
