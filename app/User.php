<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'email', 'date_naissance', 'lieu_naissance', 'telephone', 'sexe', 'type', 'photo', 'classe_id', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_naissance' => 'date',
    ];

    /*professeur*/
    public function professeurDispense()
    {
        return $this->hasMany('App\Cours');
    }


    /* etudiant */
    public function requete()
    {
        return $this->hasMany('App\Requete');
    }


    /* administrateur */
    public function notification()
    {
        return $this->hasMany('App\Notification');
    }
}
