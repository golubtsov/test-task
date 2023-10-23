<?php

namespace App\Models;

use App\Enum\ProductStatuses;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $article
 * @property string $name
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 * @property array $data
 * @property HasOne $user
 */
class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'article',
        'name',
        'status',
        'data'
    ];

    protected $casts = [
        'data' => 'json',
    ];

    public static function getAvailableProducts(): Collection
    {
        $product = new static();

        return $product->where('status', '=', ProductStatuses::AVAILABLE)->get();
    }
}
