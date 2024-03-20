<?php

namespace App\Http\Controllers;

use App\Models\SatisfactionAnswer;
use Illuminate\Support\Facades\Auth;
use App\Models\SatisfactionQuestion;
use Illuminate\Http\Request;


class SatisfactionTestController extends Controller
{
    //
    function index(Request $request){
        $questions = SatisfactionQuestion::all();
        
        $scores = [];

        foreach($request->post() as $item=>$value){
            if(strpos($item,"starRating") !== false){
                array_push($scores,$value);
            }
        }

        for ($i = 0; $i < sizeof($questions); $i++){

            $answer = new SatisfactionAnswer();
            $answer->answer = $scores[$i];
            $answer->user_id = Auth::id();
            $answer->course_id = $request->CourseId;
            $answer->satisfactionQuestion_id = $questions[$i]->id;
            $answer->save();
        }



        return view('pruebaEvDocente',[
            'QuestionsArray' => $questions,
            'ScoresArray' => $scores,
            'nose' => $request->post(),
        ]);
    }

}
