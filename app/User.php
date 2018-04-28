<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name','address','username','email','password','role_id','active'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'role_id','active','password', 'remember_token',
    ];

    //Relacion con las ordenes
    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function rol(){
        return $this->hasOne('App\Role','id','role_id');
    }
}
