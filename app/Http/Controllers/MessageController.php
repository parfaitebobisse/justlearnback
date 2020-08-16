<?php

namespace App\Http\Controllers;

use App\Espace_echange;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller{


    public function store($espace, Request $request){

        $request->validate([
            'content'=>'required|string|max:65000',
            'fichier'=>'file'
        ]);
        $Espace_echange = Espace_echange::findOrFail($espace);

        $message = new Message();
        $message->espace_echange_id = $espace;
        $message->emetteur_id = auth()->user()->id;
        $message->contenu = $request->content;
        if (isset($request->fichier)) {
            $fichier_name = trim($request->fichier->getClientOriginalName().'_'.uniqid() . '.' . $request->fichier->getClientOriginalExtension());
            $request->fichier->move(public_path('uploads/'), $fichier_name);
            $message->fichier = $fichier_name;
        }

        $message->save();

        if($request->ajax()){
            return response()->json(['status'=>'success','message'=>'Message envoyé avec succès']);
        }

        $request->session()->flash('success', "Votre message a été envoyé avec succès");

        return redirect()->back();

    }

    public function getMessagesXhr($id, Request $request){

        $espace = Espace_echange::where('id',$id)->firstOrFail();

        if($espace->type == "forum"){
            return response()->json(['messages'=>view('html.messages_forum',['forum'=>$espace])->render()]);
        }
        if($espace->type == "diffusion"){
            return response()->json(['messages'=>view('html.messages_diffusion',['diffusion'=>$espace])->render()]);
        }
        else{
            return response()->json(['messages'=>""]);
        }
    }

}
