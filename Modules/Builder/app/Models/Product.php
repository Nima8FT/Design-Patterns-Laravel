<?php

namespace Modules\Builder\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Builder\Database\Factories\ProductFactory;

// use Modules\Builder\Database\Factories\ProductFactory;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name', 'price', 'is_available', 'rating'];

    protected static function newFactory(): ProductFactory
    {
        return ProductFactory::new();
    }
}
