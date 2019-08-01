<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
   protected $fillable = [
        
        'name',
        'category_id',   
        
        'is_active',
        
    ];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function products(){
        return $this->hasMany(Product::class, 'brand_id');
    }
}
