<?php

namespace App\Http\Controllers;

use App\Classe;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{

    public function index(){
        if(auth()->user()->type != "super_administrateur" && auth()->user()->type!="administrateur"){
            abort(403);
        }
        $users = User::where('type','!=','super_administrateur')->paginate(10);
        $users_administrateurs = User::where('type','administrateur')->get();
        $users_professeurs = User::where('type','professeur')->get();
        $users_etudiants = User::where('type','etudiant')->get();

        $user_role = Auth::user()->type;
        $page = "gestion_utilisateur";

        return view('html.liste_utilisateurs', compact('user_role','page','users','users_administrateurs','users_professeurs','users_etudiants'));

    }

    public function create(){
        $user_role = Auth::user()->type;
        $page = "gestion_utilisateur";
        $user = new User();
        $classes = Classe::all();
        return view('html.ajouter_utilisateur', compact('user_role','page','user','classes'));
    }

    public function store(Request $request){
        $request->validate([
            'nom'=>'required|string|max:255',
            'prenom'=>'required|string|max:255',
            'password'=>'required|string|min:6|max:255',
            'date_naissance'=>'nullable|date|max:255',
            'lieu_naissance'=>'nullable|string|max:255',
            'email'=>'required|email|max:255|unique:users,email',
            'telephone'=>'required|string|max:255',
            'type'=>'required|string|in:etudiant,professeur,administrateur',
            'sexe'=>'required|in:0,1',
            'classe_id'=>'exists:classes,id',
            'photo'=>'required|image|max:2048',
        ]);

        $user = User::create($request->all());

        $user->password = Hash::make($request->password);

        if (isset($request->photo)) {
            $photo_name = trim(uniqid() . '.' . $request->photo->getClientOriginalExtension());
            $request->photo->move(public_path('uploads/images/profil'), $photo_name);
            $user->photo = "uploads/images/profil/".$photo_name;
        }
        $user->save();

        return redirect()->route('liste_utilisateurs');
    }

    public function edit($id, Request $request){
        $user_role = Auth::user()->type;
        if($user_role != "super_administrateur" && auth()->user()->type!="administrateur"){
            abort(403);
        }
        $user = User::findOrFail($id);
        $page = "gestion_utilisateur";
        $classes = Classe::all();
        return view('html.ajouter_utilisateur', compact('user_role','page','user','classes'));
    }

    public function update($id, Request $request){

        $user_role = Auth::user()->type;
        if($user_role != "super_administrateur" && auth()->user()->type!="administrateur"){
            abort(403);
        }
        $user = User::findOrFail($id);

        $requests = [];
        foreach ($request->all() as $key => $value) {
            if($key=="password")
                continue;
            else
                $requests[$key] = $value;
        }

        $request->validate([
            'nom'=>'required|string|max:255',
            'prenom'=>'required|string|max:255',
            'password'=>'nullable|string|min:6|max:255',
            'date_naissance'=>'nullable|date|max:255',
            'lieu_naissance'=>'nullable|string|max:255',
            'email'=>'required|email|max:255|unique:users,email,'.$id,
            'telephone'=>'required|string|max:255',
            'type'=>'required|string|in:etudiant,professeur,administrateur',
            'sexe'=>'required|in:0,1',
            'classe_id'=>'exists:classes,id',
            'photo'=>'image|max:2048',
        ]);

        $user->update($requests);

        if($request->password){
            $user->password = Hash::make($request->password);
        }

        if (isset($request->photo)) {
            $photo_name = trim(uniqid() . '.' . $request->photo->getClientOriginalExtension());
            $request->photo->move(public_path('uploads/images/profil'), $photo_name);
            $user->photo = "uploads/images/profil/".$photo_name;
        }
        $user->save();

        return redirect()->route('liste_utilisateurs');
    }

    public function destroy($id, Request $request){
        $user = User::findOrFail($id);
        if(auth()->user()->type != "super_administrateur"){
            abort(403);
        }
        $user->delete();
        return redirect()->back();
    }

}
