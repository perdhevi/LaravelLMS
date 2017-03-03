<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    //
    
    public function answer(){
        return $this->hasMany("App\Quiz", "course_id")->get();
    }
}
