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

    public function emetteur(){
        return $this->belongsTo(User::class,'emetteur_id','id');
    }

    public function recepteur(){
        return $this->belongsTo(User::class,'recepteur_id','id');
    }
}
