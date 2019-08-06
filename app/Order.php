<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function orderproduct(){
    	
        return $this->hasMany(OrderProduct::class, 'order_id');
    }

    public function coupon(){
        return $this->belongsTo(Coupon::class, 'coupon_id');
    }
    
}
