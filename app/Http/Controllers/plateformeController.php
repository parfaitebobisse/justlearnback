<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plateforme;

class plateformeController extends Controller
{
    //

    public function store(Request $request){
        $request->validate([
            'denomination'=>'required|string|max:50',
        ]);

        $plateforme = new Plateforme();
        $plateforme->denomination = $request->denomination;

        $plateforme->save();
        $page = "gestion_plateforme";
        $user_role = "super_administrateur";
        $plateformes = Plateforme::all();
        // dd($plateformes);

        return view('html.liste_plateformes', compact('plateformes','user_role','page'));

    }

    public function majP(){
        $page = "gestion_plateforme";
        $user_role = "super_administrateur";
        $plateformes = Plateforme::all();
        // dd($plateformes);

        return view('html.liste_plateformes', compact('plateformes','user_role','page'));
    }
}
