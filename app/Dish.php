<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
    						'name',
    						'price',
    						'quantity'
    					];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
