<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    //

    public function cours()
    {
        return $this->belongsTo('App\Cours');
    }

    public function enregistrement()
    {
        return $this->hasMany('App\Enregistrement');
    }

}
