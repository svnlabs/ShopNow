<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        
        'name',
        'parent_id',
        'position',        
        'slug',        
        'is_searchable',
        'is_active',
        
    ];

     public function brand()
    {
        return $this->hasMany('App\Brand');
    }

     public function childs() {

        return $this->hasMany('App\Category','parent_id','id') ;

    }




}
