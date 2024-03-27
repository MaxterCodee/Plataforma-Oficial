<?php

namespace App\Http\Controllers;

use App\Models\SatisfactionQuestion;
use App\Models\SatisfactionAnswer;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

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

        $comment = new Comment();
        $comment->comment = $request->commentary;
        $comment->course_id = $request->CourseId;
        $comment->user_id = Auth::id();
        $comment->save();

        return view('pruebaEvDocente',[
            'QuestionsArray' => $questions,
            'ScoresArray' => $scores,
            'nose' => $request->post(),
        ]);
        }
    

    function showQuestions(){
        $questions = SatisfactionQuestion::all();

        return view('courses.modalSatisfaction',['QuestionsArray' => $questions]);

    }
}