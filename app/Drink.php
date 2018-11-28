<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [
    						'name',
							'category',
							'price_drink',
							'img_path_drink',
						];
	
		public function Menu(){

		return $this->belongsTo('App\Menu');
		
	}
}

