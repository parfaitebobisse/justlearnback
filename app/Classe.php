<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    //
    public function plateforme()
    {
        return $this->belongsTo('App\Plateforme');
    }

    public function notification()
    {
        return $this->hasMany('App\Notification');
    }

    public function cours()
    {
        return $this->hasMany('App\Cours');
    }
}
