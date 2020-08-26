<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Evaluation;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EvaluationController extends Controller{


    public function store(Request $request){

        $evaluation = new Evaluation();
        $evaluation->intitule = $request["intitule"];
        $evaluation->cours = $request["cours"];
        $evaluation->heure = "1";
        $evaluation->minutes = "0";
        $evaluation->save();
        $j = 1;
        $repio = array();
        for ($i = 0; $i < count($request["question"]); $i++) {
                while ($j <= count($request["reponses"])){
                    if (!empty($request["reponses"][$j-1])) {
                        if ($j%4==0) {
                            $repio[$i][] = $request["reponses"][$j-1];
                            $j++;
                            break;
                        }else {
                            $repio[$i][] = $request["reponses"][$j-1];
                        }
                    }
                    $j++;
                }
        }
        for ($i = 0; $i < count($request["question"]); $i++) {
            DB::table('evaluation_meta')->insertGetId(
                ['evaluation' => $evaluation->id, 'questions' => $request['question'][$i], 'reponses' => json_encode($repio[$i]), 'juste' => $repio[$i][0]]
            );
        }
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
