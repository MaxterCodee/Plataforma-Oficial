<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Week;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    //
    public function index($lessonId,$weekId)
    {
        $lesson = Lesson::findOrFail($lessonId);
        $content = $lesson->content;
        $week = Week::findOrFail($weekId);
        $lessons = $week->lessons;
    
        return view('lessons.index', compact('lesson', 'content'));
    }

    public function lesson()
{
    return $this->belongsTo(Lesson::class);
}

public function week()
{
    return $this->belongsTo(Week::class);
}
// Obtener la semana asociada

public function store(Request $request)
{
    $request->validate([
        'number' => 'required',
        'markdown' => 'required',
        'lesson_id' => 'required',
    ]);

    // Obtener la lección asociada
    $lesson = Lesson::findOrFail($request->get('lesson_id'));
    $week = Week::findOrFail($request->get('week_id'));

    // Crear y guardar el nuevo contenido
    $content = new Content();
    $content->number = $request->get('number');
    $content->markdown = $request->get('markdown');

    // Asignar la lección asociada
    $content->lesson()->associate($lesson);
    // Asignar la semana asociada
    $lesson->week()->associate($week);

    $content->save(); // Save the content, not the lesson

    return redirect()->route('lessons.index', ['week' => $week->id, 'lesson' => $lesson->id])
                 ->with('success', 'Content created successfully');

}


}

