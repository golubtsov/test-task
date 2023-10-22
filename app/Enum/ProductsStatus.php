<?php

namespace App\Enum;

enum ProductsStatus
{
    const AVAILABLE = 1;

    const UNAVAILABLE = 2;

    public static function toArray(): array
    {
        return [
            self::AVAILABLE => __('products.table.status.available'),
            self::UNAVAILABLE => __('products.table.status.unavailable'),
        ];
    }
}
