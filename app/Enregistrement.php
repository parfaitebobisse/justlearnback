<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enregistrement extends Model
{
    //enrgistrement video dans les playlists

    public function seance()
    {
        return $this->belongsTo('App\Seance');
    }
}
