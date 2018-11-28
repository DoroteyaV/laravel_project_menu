<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
    						'name',
							'address',
							'friday_capacity',
							'img_path',
							'coefficient',
						];
	
	
	public function Menu(){

		return $this->belongsTo('App\Menu');
		
	}
}
