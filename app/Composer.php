<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Composer extends Model
{
    //etudiant

    public function sujet()
    {
        return $this->belongsToMany('App\Sujet');
    }
}
