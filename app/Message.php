<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //

    public function espaceEchange()
    {
        return $this->belongsTo('App\Espace_echange');
    }
}
