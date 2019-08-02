<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $guarded = [];

    public function order(){
        return $this->hasMany(Order::class, 'coupon_id');
    }
    
}
