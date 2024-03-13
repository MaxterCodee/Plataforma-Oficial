<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

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
        'course_objectives' => 'required',
        'start_date' => 'required|date',
        'expiration_date' => 'required|date',
        'status' => 'required',
        'image_upload' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $course = new Course();
    $course->name = $request->get('name'); 
    $course->description = $request->get('description'); 
    $course->course_objectives = $request->get('course_objectives');
    $course->start_date = $request->get('start_date');
    $course->expiration_date = $request->get('expiration_date');
    $course->status = $request->get('status');

    if($request->hasFile('image_upload')){
        $originName = $request->file('image_upload')->getClientOriginalName(); 
        $name = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('image_upload')->getClientOriginalExtension();
    
        $fileName = $name.'_'.time().'.'.$extension;
    
        $request->file('image_upload')->move(public_path('courses_images'), $fileName);  
    
        $url = asset('courses_images/'.$fileName); 
        $course->image_url = $url;
        $course->save();
                 
        // return response()->json(['fileName'=>$fileName, 'uploaded'=>1, 'url'=>$url]);
    }
    

    $course->save();

    return redirect()->route('courses.index')->with('success', 'Curso creado con éxito');
}




    public function update(Request $request,  $id)
    {
        $course = Course::find($id);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'course_objectives' => 'required',
            'start_date' => 'required|date',
            'expiration_date' => 'required|date|after:start_date',
            'status' => 'required|in:activo,inactivo',
            'image_url' => 'sometimes|url',
        ]);

        $course->update([
            'name' => $request->name,
            'description' => $request->description,
            'course_objectives' => $request->course_objectives,
            'start_date'=> $request->start_date,
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

