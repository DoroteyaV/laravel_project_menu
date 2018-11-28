<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
    						'name',
							'address',
							'friday_capacity',
							'menu_id',
							'img_path',
						];
	
		public function menu(){

		return $this-> belongsTo('App\Menu');
		
	}
}
