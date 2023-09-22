<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "price",
        "slug",
        "image",
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function voucher(): HasMany
    {

        return $this->hasMany(Voucher::class);

    }

    public function payment(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
    
}
