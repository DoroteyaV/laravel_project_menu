<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
    						'name',
						];
	
	public function Drink(){

		return $this->hasMany('App\Drink');
		
	}
	public function Dish(){

		return $this-> hasMany('App\Dish');
		
	}
}
