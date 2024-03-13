<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Week;
use App\Models\Lesson;
use App\Models\Content;

class LessonController extends Controller
{
    public function index($weekId)
    {
        $week = Week::findOrFail($weekId);
        $lessons = $week->lessons;

        return view('lessons.index', compact('week', 'lessons'));
    }

    public function week()
{
    return $this->belongsTo(Week::class);
}

public function content()
{
    return $this->hasOne(Content::class);
}

public function store(Request $request)
{
    // Obtener el último número de lección
    $lastLesson = Lesson::where('week_id', $request->get('week_id'))->orderBy('number', 'desc')->first();

    // Determinar el nuevo número de lección
    $newNumber = $lastLesson ? $lastLesson->number + 1 : 1;
    // dd($newNumber);
    // dd($newNumber, $lastLesson, $lastLesson->week_id, $request->get('week_id'));
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'week_id' => 'required',
    ]);

    // Obtener la semana asociada
    $week = Week::findOrFail($request->get('week_id'));

    // Crear y guardar la nueva lección
    $lesson = new Lesson();
    $lesson->number = $newNumber; // Asignar el nuevo número de lección
    $lesson->name = $request->get('name');
    $lesson->description = $request->get('description');

    // Asignar la semana asociada
    $lesson->week()->associate($week);

    $lesson->save();

    return redirect()->route('lessons.index', ['week' => $week->id])
                     ->with('success', 'Lección creada exitosamente');
}
}