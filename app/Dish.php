<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
    						'name',
							'category',
							'price_dish',
							'restaurant_id',
						];
	
		public function Menu(){

		return $this->belongsTo('App\Menu');
		
	}
}