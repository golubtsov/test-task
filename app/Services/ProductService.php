<?php

namespace App\Services;

use App\Jobs\Prosuct\MailAboutNewProductJob;
use App\Models\Product;

class ProductService
{
    public static function create(array $data)
    {
        $attributes = self::createAttributes($data['namesAttributes'], $data['valuesAttributes']);

        $product = Product::query()
            ->create([
                'article' => $data['article'],
                'name' => $data['name'],
                'status' => $data['status'],
                'data' => $attributes,
            ]);

        dispatch(new MailAboutNewProductJob($product, auth()->user()));

        return $product;
    }

    public static function update(array $data, int $id): bool|int
    {
        $product = Product::query()->find($id);
        $attributes = self::createAttributes($data['namesAttributes'], $data['valuesAttributes']);

        return $product->update([
            'name' => $data['name'],
            'article' => $data['article'],
            'status' => $data['status'],
            'data' => $attributes,
        ]);
    }

    public static function delete(int $id)
    {
        return Product::query()->find($id)->delete();
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
