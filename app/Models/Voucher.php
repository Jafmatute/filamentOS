<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        "code",
        "discount_percent",
        "product_id",
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
