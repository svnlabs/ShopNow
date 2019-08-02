<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    } 
    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function wishlist(){
     return $this->hasMany(Wishlist::class);
    }

    public function order(){
     return $this->hasMany(Order::class);
    }
}
