<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller{


    public function store(Request $request){

        $evaluation = new Evaluation();
        $evaluation->intitule = $request["intitule"];
        $evaluation->classe = $request["cours"];
        $evaluation->heure = "1";
        $evaluation->minutes = "0";
        $evaluation->questions = json_encode($request["question"]);
        $evaluation->reponses = json_encode($request["reponses"]);
        $evaluation->save();

        return response()->json(['type'=>'success','message'=>'Evaluation enregistrée avec succès']);

    }

    public function delete($id){

        Evaluation::where("id",$id)->delete();
        return redirect()->back();
    }

    public function addTime(Request $request){
        $evaluation = Evaluation::findOrFail($request['id']);

        $requests = [];
        foreach ($request->all() as $key => $value) {
            if (empty($value)) {
                $requests[$key] = 0;
            } else {
                $requests[$key] = $value;
            }
        }
        $evaluation->update($requests);

        return response()->json(['type'=>'success','message'=>'Horaire changée avec succès']);
    }

}
