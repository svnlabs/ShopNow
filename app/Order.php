<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function products(){
    	
        return $this->hasMany(Product::class, 'category_id');
    }
    public function orderproduct(){
    	
        return $this->hasOne(OrderProduct::class, 'order_id');
    }

    public function coupon(){
        return $this->belongsTo(Coupon::class, 'coupon_id');
    }
    
}
