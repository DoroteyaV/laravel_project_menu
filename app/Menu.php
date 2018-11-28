<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
    						'name',
							'dish_id',
							'drink_id',
							'img_path_dish',
						];
	
	public function restaurant(){

		return $this->hasOne('App\Restaurant');
	}
	public function drink(){

		return $this->belongsTo('App\Drink');
	}
	public function dish(){

		return $this->belongsTo('App\Dish');
	}
	
}