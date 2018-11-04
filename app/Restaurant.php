<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
    						'name',
    						'address',
    						'capacity_friday'
    					];

    public function menu()
    {
        return $this->hasOne('App\Menu');
    }
}
