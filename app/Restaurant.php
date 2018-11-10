<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
    						'name',
    						'address',
    						'capacity_friday',
							'menu_id'
    					];

    public function menu()
    {
        return $this->hasOne('App\Menu');
    }
}
