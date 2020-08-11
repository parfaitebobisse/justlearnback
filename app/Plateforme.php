<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plateforme extends Model
{
    //

    public function classe()
    {
        return $this->hasMany('App\Classe');
    }
}
