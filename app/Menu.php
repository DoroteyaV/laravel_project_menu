<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [ 
    						'name',
							'drink_id',
							'category_id'
						];

	public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

    public function category()
    {
        return $this->hasMany('App\Category');
    }

    public function drink()
    {
        return $this->hasMany('App\Drink');
    }
}
