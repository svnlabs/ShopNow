<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = [
        'tax_class_id',
        'name',
        'image',
        'description',
        
        'slug',
        'sku',
        'price',
        'special_price',
        'special_price_start',
        'special_price_end',
        'manage_stock',
        'qty',
        'in_stock',
        'is_active',
        'new_from',
        'new_to',
    ];
}
