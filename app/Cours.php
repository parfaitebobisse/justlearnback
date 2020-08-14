<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    //

    public function emploiDeTemps()
    {
        return $this->belongsTo('App\Emploi_de_temps');
    }

    public function evaluation()
    {
        return $this->hasMany('App\Evaluation');
    }

    public function professeur()
    {
        return $this->hasMany('App\User');
    }

    public function espaceEchange()
    {
        return $this->hasMany('App\Espace_echange');
    }

    public function seance()
    {
        return $this->hasMany('App\Seance');
    }

    public function classe()
    {
        return $this->belongsTo('App\Classe');
    }

}
