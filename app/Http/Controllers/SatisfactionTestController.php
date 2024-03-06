<?php

namespace App\Http\Controllers;

use App\Models\SatisfactionQuestion;
use Illuminate\Http\Request;

class SatisfactionTestController extends Controller
{
    //
    function index(Request $request){
        $questions = SatisfactionQuestion::all();
        
        $scores = [];

        foreach($request->post() as $item=>$value){

            if($item == "_token"){
                continue;
            }else{
                array_push($scores,$value);
            }
        }
        
        return view('pruebaEvDocente',[
            'QuestionsArray' => $questions,
            'ScoresArray' => $scores,
            'nose' => $request->post()  
        ]);
    }

    function showQuestions(){
        $questions = SatisfactionQuestion::all();

        return view('evaluacionDocente',['QuestionsArray' => $questions]);

    }
}
