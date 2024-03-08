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
    $questions = $exam->questions; // Obtiene las preguntas del examen

    // Aquí puedes pasar el examen y las preguntas a tu vista
    return view('exams.show', compact('exam', 'questions'));
}



public function edit($id)
{
    $exam = Exam::find($id);
    // Aquí puedes pasar el examen a tu vista de edición
    return view('exams.update', compact('exam'));
}

public function destroy($id)
{
    $exam = Exam::find($id);

    // Elimina las preguntas y respuestas asociadas al examen
    foreach ($exam->questions as $question) {
        // Elimina las respuestas asociadas a la pregunta
        foreach ($question->answers as $answer) {
            $answer->delete();
        }

        // Ahora puedes eliminar la pregunta
        $question->delete();
    }

    // Ahora puedes eliminar el examen
    $exam->delete();

    // Redirige al usuario a la página de índice después de borrar el examen
    return redirect()->route('exams.index');
}



}
