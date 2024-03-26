<?php
namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    //
    public function index()
    {
        $exams = Exam::all();
        return view('exams.index',compact('exams'));
    }
    
public function store(Request $request)
{
    $exam = new Exam;
    $exam->title = $request->input('EXaname');
    $exam->course_id = $request->input('course_id'); // Asegúrate de que este valor se está enviando desde tu formulario y que existe en la tabla 'courses'
    $exam->save();

    foreach ($request->input('preguntas') as $pregunta) {
        $question = new Question;
        $question->ask = $pregunta['pregunta'];
        $question->exam_id = $exam->id;
        $question->save();
    
        foreach ($pregunta['respuestas'] as $respuesta) {
            $answer = new Answer;
            $answer->option = $respuesta['option'];
            $answer->GoodOpci = isset($respuesta['GoodOpci']) && $respuesta['GoodOpci'] == 'on' ? 1 : 0; // Verifica si 'GoodOpci' existe antes de acceder a ella
            $answer->question_id = $question->id;
            $answer->save();
        }
    }

    return redirect('/exams');
}
public function show($id)
{
    $exam = Exam::find($id);
    if ($exam === null) {
        
        return redirect()->route('errorPage')->with('error', 'Examen no encontrado');
    }
    $questions = $exam->questions;
    return view('exams.show', compact('exam', 'questions')); 
}
public function edit($id)
{
    $exam = Exam::find($id);
    if ($exam) {
        $questions = $exam->questions; // Obtiene las preguntas del examen
        return view('exams.edit', ['exam' => $exam, 'questions' => $questions]); // Pasa el examen y las preguntas a la vista
    } else {
        // Redirige a una página de error o muestra un mensaje de error
        return redirect()->route('errorPage')->with('error', 'Examen no encontrado');
    }
}

public function update(Request $request, $id)
{
    
    $exam = Exam::find($id);
    
    $exam->title = $request->input('EXaname');
    $exam->course_id = $request->input('course_id');
    $exam->save();
    
    foreach ($request->input('questions') as $question_id => $question_data) {
        $question = Question::find($question_id); 
        $question->ask = $question_data['pregunta'];
        $question->save();
        foreach ($question_data['respuestas'] as $answer_id => $answer_data) {
            $answer = Answer::find($answer_id); 
            $answer->option = $answer_data['option'];
            $answer->GoodOpci = isset($answer_data['GoodOpci']) && $answer_data['GoodOpci'] == 'on' ? 1 : 0;
            $answer->save();
        }
    }
    
    return redirect()->route('exams.index');
}

public function destroy($id)
{
    $exam = Exam::find($id);

    foreach ($exam->questions as $question) {
        
        foreach ($question->answers as $answer) {
            $answer->delete();
        }

        $question->delete();
    }
    $exam->delete();
    
    return redirect()->route('exams.index');
}
public function solve(Request $request, $id)
{
    
    $exam = Exam::find($id);

    $correctAnswers = 0;

    foreach ($request->input('answers') as $questionId => $answerId) {
        
        $question = Question::find($questionId);
    
        $correctAnswer = $question->answers()->where('GoodOpci', 1)->first();
    
        if ($correctAnswer->id == $answerId) {
            
            $correctAnswers++;
        }
    }
    
    $score = ($correctAnswers / count($exam->questions)) * 100;

    return redirect()->route('exams.results', ['id' => $exam->id, 'score' => $score]);

    dd($score);

}
public function results($id)
{
    
    $exam = Exam::find($id);

    $score = $exam->score;

    $correctQuestions = $exam->questions()->where('GoodOpc', 1)->get();

    return view('exams.results', ['score' => $score, 'correctQuestions' => $correctQuestions]);
    
}



}
