<?php

namespace App\Http\Controllers;

use App\Classe;
use App\Cours;
use App\Espace_echange;
use App\Evaluation;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CoursController extends Controller{

    public function store(Request $request){

        $request->validate([
            'denomination'=>'required|string|max:50',
            'classe'=>'required|int|exists:classes,id',
            'photo'=>'required|image|max:2048'
        ]);

        $cours = new Cours();
        $cours->user_id = auth()->user()->id;
        $cours->classe_id = $request->classe;
        $cours->denomination = $request->denomination;
        if (isset($request->photo)) {
            $photo_name = trim(uniqid() . '.' . $request->photo->getClientOriginalExtension());
            $request->photo->move(public_path('uploads/images/cours'), $photo_name);
            $cours->photo = $photo_name;
        }

        $cours->save();

        $request->session()->flash('success', "Le cours a été ajouté avec succès");

        return redirect()->back();

    }

    public function detailCours($id, Request $request){
        $user_role = Auth::user()->type;
        $classes = Classe::all();
        $evaluations = Evaluation::all();
        $eva_metas = DB::table("evaluation_meta")
        ->orderBy('id', 'desc')
        ->get();
        $cour = Cours::findOrFail($id);
        $test = $id;
        if(auth()->user()->type=="etudiant"){
            $users_online = $cour
                    ->classe
                    ->etudiants()
                    ->where('users.id','!=',auth()->user()->id)
                    ->get();
            $users_online[] = $cour->professeur;
        }
        else{
            $users_online = $cour
                    ->classe
                    ->etudiants;
        }
        // if($user_role=="professeur"){
        //     $users_online[] = auth()->user();
        // }
        // else{
        //     $users_online[] = $cour->user;
        // }
        $forum = Espace_echange::where('cour_id',$cour->id)->where('type','forum')->first();
        if(!$forum){
            $forum = new Espace_echange();
            $forum->cour_id = $cour->id;
            $forum->type="forum";
            $forum->save();
        }
        $diffusion = Espace_echange::where('cour_id',$cour->id)->where('type','diffusion')->first();
        if(!$diffusion){
            $diffusion = new Espace_echange();
            $diffusion->cour_id = $cour->id;
            $diffusion->type="diffusion";
            $diffusion->save();
        }
        return view('html.page_professeur_details',compact('cour','test','user_role','users_online','classes','forum','diffusion','evaluations','eva_metas'));
    }

}
