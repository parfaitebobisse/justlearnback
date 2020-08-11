<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sujet extends Model
{
    //

    public function question()
    {
        return $this->hasMany('App\Question');
    }

    public function evaluation()
    {
        return $this->belongsTo('App\Evaluation');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
