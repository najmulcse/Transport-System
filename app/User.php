<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        ''
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function isAdmin(){

        return $this->usertype_id == 1;
    }
    public function isSupervisor(){

        return $this->usertype_id == 5;
    }
    public function isDriver(){

        return $this->usertype_id == 2;
    }
    public function isHelper(){

        return $this->usertype_id == 6;
    }
    public function type()
    {
        return $this->belongsTo('App\Usertype','usertype_id','id');
    }
    public function assign(){
        
        return $this->belongsTo('App\Routine');
    }
}
