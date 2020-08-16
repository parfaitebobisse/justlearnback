<?php

namespace App\Http\Controllers;

use App\Classe;
use App\Cours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    //

    public function goTo_ajouter_plateforme()
    {
        $user_role = Auth::user()->type;
        $page = "gestion_plateforme";
        return view('html.ajouter_plateforme', compact('user_role','page'));
    }

    public function goTo_ajouter_utilisateur()
    {
        $user_role = Auth::user()->type;
        $page = "gestion_utilisateur";
        return view('html.ajouter_utilisateur', compact('user_role','page'));
    }

    public function goTo_consulter_bilan()
    {
        $user_role = Auth::user()->type;
        $page = "consulter_bilan";
        return view('html.consulter_bilan', compact('user_role','page'));
    }

    public function goTo_consulter_note_admin()
    {
        $user_role = Auth::user()->type;
        $page = "consulter_note";
        return view('html.consulter_note_admin', compact('user_role','page'));
    }

    public function goTo_consulter_requete()
    {
        $user_role = Auth::user()->type;
        $page = "consultation_requete";
        return view('html.consulter_requete',compact('user_role','page'));
    }

    public function goTo_emploie_temps_admin()
    {
        $user_role = Auth::user()->type;
        $page = "emploi_temps";
        return view('html.emploie_temps_admin',compact('user_role','page'));
    }

    public function goTo_liste_plateformes()
    {
        $user_role = Auth::user()->type;
        $page = "gestion_plateforme";
        return view('html.liste_plateformes',compact('user_role','page'));
    }

    public function goTo_liste_utilisateurs()
    {
        $user_role = Auth::user()->type;
        $page = "gestion_utilisateur";
        return view('html.liste_utilisateurs', compact('user_role','page'));
    }

    public function goTo_page_etudiant()
    {
        $user_role = "etudiant";
        return view('html.page_etudiant', compact('user_role'));
    }

    public function goTo_page_professeur()
    {
        $user_role = "professeur";
        $classes = Classe::all();
        $cours = Cours::all();
        return view('html.page_professeur', compact('user_role','classes','cours') );
    }

}
