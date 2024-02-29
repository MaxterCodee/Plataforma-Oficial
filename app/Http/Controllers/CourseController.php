<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'expiration_date' => 'required|date',
        'status' => 'required',
    ]);

    $course = new Course();
    $course->name = $request->get('name'); 
    $course->description = $request->get('description'); 
    $course->expiration_date = $request->get('expiration_date');
    $course->status = $request->get('status');

    $course->save();

    return redirect()->route('courses.index')->with('success', 'Curso creado con éxito');
}


    public function update(Request $request,  $id)
    {
        $course = Course::find($id);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'expiration_date' => 'required|date|after:start_date',
            'status' => 'required|in:activo,inactivo',
            'image_url' => 'sometimes|url',
        ]);

        $course->update([
            'name' => $request->name,
            'description' => $request->description,
            'expiration_date' => $request->expiration_date,
            'status' => $request->status,
            'image_url' => $request->image_url,
        ]);

        return redirect()->route('courses.index');
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('courses.index');
    }



}

