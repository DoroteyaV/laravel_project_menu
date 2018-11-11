<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [ 
    						'name',
							'dish_id',
    					 ];
   
    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }

    public function dish()
    {
        return $this->hasMany('App\Dish');
    }

}
