<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espace_echange extends Model
{
    //
    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    public function cours()
    {
        return $this->belongsTo('App\Cours');
    }
}
