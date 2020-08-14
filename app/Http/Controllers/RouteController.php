<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //

    public function goTo_ajouter_plateforme()
    {
        return view('html.ajouter_plateforme',compact('test'));
    }

    public function goTo_ajouter_utilisateur()
    {
        return view('html.ajouter_utilisateur');
    }

    public function goTo_consulter_bilan()
    {
        return view('html.consulter_bilan');
    }

    public function goTo_consulter_note_admin()
    {
        return view('html.consulter_note_admin');
    }

    public function goTo_consulter_requete()
    {
        return view('html.consulter_requete');
    }

    public function goTo_emploie_temps_admin()
    {
        return view('html.emploie_temps_admin');
    }

    public function goTo_liste_plateformes()
    {
        return view('html.liste_plateformes');
    }

    public function goTo_liste_utilisateurs()
    {
        return view('html.liste_utilisateurs');
    }

    public function goTo_page_etudiant()
    {
        $type_user = "etudiant";
        return view('html.page_etudiant', compact('type_user'));
    }

    public function goTo_page_professeur()
    {
        return view('html.page_professeur');
    }

}
