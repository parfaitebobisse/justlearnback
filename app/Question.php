<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    public function question()
    {
        return $this->belongsTo('App\Sujet');
    }

    public function reponse()
    {
        return $this->hasMany('App\Reponse');
    }
}
