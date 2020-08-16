<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emploi_de_temps extends Model
{
    //

    public function cours()
    {
        return $this->hasOne('App\Cours');
    }
}
