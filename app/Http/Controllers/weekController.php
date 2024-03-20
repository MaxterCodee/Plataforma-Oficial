<?php

namespace App\Http\Controllers;

use App\Models\Week;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\SatisfactionQuestion;

class weekController extends Controller{

    public function index($courseId)
    {
        $questions = SatisfactionQuestion::all();
        $course = Course::findOrFail($courseId);
        $weeks = $course->weeks;

        return view('weeks.index', compact('course', 'weeks','questions'));
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'description' => 'required',
        ]);

        // Obtener el curso asociado
        $course = Course::findOrFail($request->get('course_id'));

        // Crear y guardar la nueva semana
        $week = new Week();
        $week->number = $request->get('number');
        $week->description = $request->get('description');

        // Asignar el curso asociado
        $week->course()->associate($course);

        $week->save();

        return redirect()->route('weeks.index', ['course' => $course->id])
                        ->with('success', 'Week created successfully');
    }





}
