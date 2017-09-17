<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $guarded = ['status'];

    
    // public function routine()
    // {
    // 	return $this->hasOne('App\Routine');
    // }
}
