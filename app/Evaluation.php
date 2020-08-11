<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    //

    public function sujet()
    {
        return $this->hasMany('App\Sujet');
    }

    public function cours()
    {
        return $this->belongsTo('App\Cours');
    }
}
