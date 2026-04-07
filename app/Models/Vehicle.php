<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Vehicle extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'year_start',
        'year_end',
        'engine',
        'version',
    ];

    protected $casts = [
        'year_start' => 'integer',
        'year_end' => 'integer',
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_vehicle');
    }
}
