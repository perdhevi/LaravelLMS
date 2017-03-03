<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //
    public function course(){
        return $this->belongsTo('App\course');
    }
    public function questions(){
        return $this->hasMany('App\question');
    }
}
