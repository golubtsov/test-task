<?php

namespace App\Enum;

enum ProductStatuses
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

    public static function getStatusLang(int $id): string|false
    {
        foreach (self::toArray() as $index => $value) {
            if ($id == $index) {
                return $value;
            }
        }

        return false;
    }
}
