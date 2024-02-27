<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;

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
        ]);

        Course::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('courses.index');
    }

    public function update(Request $request,  $id)
    {
        $curso = Course::find($id);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $curso->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $curso = Course::find($id);
        $curso->delete();
        return redirect()->route('courses.index');
    }
}
