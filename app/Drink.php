<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [ 
    						'name',
    						'price',
    						'quantity'
    					];

    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }
}
