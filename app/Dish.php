<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
    						'name',
							'category',
							'price_dish',
							'img_path_dish',
						];
	
		public function Menu(){

		return $this->belongsTo('App\Menu');
		
	}
}