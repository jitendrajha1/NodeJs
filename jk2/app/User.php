<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\UserRole;
use App\UserProfile;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roles(){
        //return $this->hasManyThrough('user_roles');
        return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
    }
    public function profile(){
        return $this->hasOne('App\UserProfile','user_id');
    }
}
