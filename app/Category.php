<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $guarded =[];

    public function brand()
    {
        return $this->hasMany('App\Brand');
    }
    



    
    public function parent(){
        return $this->belongsTo(Category::class, 'id');
    }

    public function childs() {

        return $this->hasMany(Category::class,'parent_id') ;

    }

 
    public function products(){
        return $this->hasMany(Product::class, 'category_id');
    }




}
