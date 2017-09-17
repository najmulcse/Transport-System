<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    protected $guarded =[''];

    public function vehicle(){

    	return $this->belongsTo('App\Vehicle','vehicle_id','vehicle_ID');
    }
    public function route()
    {
    	return $this->belongsTo('App\Route');
    }
    public function driver()
    {
    	return $this->belongsTo('App\User','driver_id','employee_id');
    }
    public function helper()
    {
    	return $this->belongsTo('App\User','helper_id','employee_id');
    }
    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }

}
