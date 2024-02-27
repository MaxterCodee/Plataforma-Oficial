<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index()
    {
        return view('courses.index');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
        'expiration_date' => 'nullable|date',
        'status' => 'integer',
        'image_url' => 'nullable|string',
        'competencias' => 'nullable|json',
    ]);

    $course = Course::create($validatedData);

    return redirect()->route('courses.index')->with('success', 'Curso creado exitosamente');
}

}
