<?php

namespace App\Http\Controllers;

use App\Models\Week;
use Illuminate\Http\Request;
use App\Models\Course;

class weekController extends Controller
{
    public function index($courseId)
    {
        $course = Course::findOrFail($courseId);
        $weeks = $course->weeks;

        return view('weeks.index', compact('course', 'weeks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required',

            'week_name' => 'required',
            'description' => 'required',
            'image_upload' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Obtener el curso asociado
        $course = Course::findOrFail($request->get('course_id'));

        // Crear y guardar la nueva semana
        $week = new Week();
        $week->number = $request->get('number');
        $week->week_name = $request->get('week_name');
        $week->description = $request->get('description');

        if ($request->hasFile('image_upload')) {
            $originName = $request->file('image_upload')->getClientOriginalName();
            $name = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('image_upload')->getClientOriginalExtension();

            $fileName = $name . '_' . time() . '.' . $extension;

            $request->file('image_upload')->move(public_path('weeks_images'), $fileName);

            $url = asset('weeks_images/' . $fileName);
            $week->image_url = $url;
        }

        // Asignar el curso asociado
        $week->course()->associate($course);
        
        $week->save();
        
        return redirect()->route('weeks.index', ['course' => $course->id])
            ->with('success', 'Week created successfully');
    }
}
