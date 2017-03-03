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
    
    public function courses_taken(){
        $res =$this->belongsToMany("App\course", "course_user", "user_id", "course_id");
        return  $res->get();
    }
    
    public function courses_owned(){
        $res = $this->hasMany("App\course", "course_owner");
        return $res->get();
    }
}
