<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Storage; 

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }


public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ajusta los tipos de archivo según tus necesidades
    ]);

    $image = $request->file('image_url');
    $imageName = time() . '.' . $image->extension();
    $image->storeAs('images/courses', $imageName, 'public');

    Course::create([
        'name' => $request->name,
        'image_url' => 'storage/images/courses/'.$imageName,
    ]);

    return redirect()->route('courses.index');

}
public function update(Request $request,  $id)
{
    $course = Course::find($id);
    $request->validate([
        'name' => 'required',
        'image_url' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Puedes ajustar según tus necesidades
    ]);

    // Verifica si se proporcionó una nueva imagen
    if ($request->hasFile('image_url')) {
        // Elimina la imagen antigua
        Storage::delete('public/' . $course->image_url);

        // Procesa y almacena la nueva imagen
        $newImage = $request->file('image_url');
        $newImageName = time() . '.' . $newImage->extension();
        $newImage->storeAs('public/images/courses', $newImageName);

        // Actualiza la ruta de la imagen en la base de datos
        $course->update([
            'name' => $request->name,
            'image_url' => 'storage/images/courses/' . $newImageName,
        ]);
    } else {
        // Si no se proporcionó una nueva imagen, actualiza solo el nombre
        $course->update([
            'name' => $request->name,
        ]);
    }

    return redirect()->route('courses.index');
}
public function destroy($id)
{
    $course = Course::find($id);
    Storage::delete('public/' . $course->image_url);
    $course->delete();
    return redirect()->route('courses.index');
}
}