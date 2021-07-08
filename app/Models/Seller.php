<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends User
{
    use HasFactory;

    /**
     * Boot method
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('seller', function ($query) {
            return $query->has('products');
        });
    }
}
