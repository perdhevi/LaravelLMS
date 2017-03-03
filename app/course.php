<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    public function users(){
        return $this->belongsToMany("App\User",  "course_user", "course_id", "user_id")->get();
    }
    
    public function quizes(){
        return $this->hasMany("App\Quiz", "course_id")->get();
    }
}
