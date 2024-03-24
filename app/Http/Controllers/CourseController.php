<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Week;
use Carbon\Carbon;
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

        if ($request->hasFile('image_upload')) {
            // Lógica para guardar la imagen del curso
            $originName = $request->file('image_upload')->getClientOriginalName();
            $name = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('image_upload')->getClientOriginalExtension();

            $fileName = $name . '_' . time() . '.' . $extension;

            $request->file('image_upload')->move(public_path('courses_images'), $fileName);

            $url = asset('courses_images/' . $fileName);
            $course->image_url = $url;
        }

        $course->save();

        // Obtener el ID del curso recién guardado
        $courseId = $course->id;

        // Calcular las semanas entre las fechas de inicio y expiración
        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->expiration_date);

        $weeks = [];
        $weekImages = glob(public_path('weeks_images/*'));
        $weekNumber = 1;
        while ($startDate->lte($endDate)) {
            // Seleccionar una imagen aleatoria para la semana
            $randomImage = $weekImages[array_rand($weekImages)];

            // Obtener el nombre del archivo de la ruta
            $imageName = basename($randomImage);

            // Construir la URL de la imagen
            $imageUrl = asset('weeks_images/' . $imageName);

            $weeks[] = [
                'start_date' => $startDate->copy()->startOfWeek(),
                'end_date' => $startDate->copy()->endOfWeek(),
                'course_id' => $courseId,
                'image_url' => $imageUrl,
                'number' => $weekNumber,
            ];
            $startDate->addWeek();
            $weekNumber++;
        }

        // Insertar en la base de datos
        Week::insert($weeks);

        return redirect()->route('courses.index')->with('success', 'Curso creado con éxito');
    }

    public function update(Request $request, $id)
{
    $course = Course::find($id);
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'course_objectives' => 'required',
        'start_date' => 'required|date',
        'expiration_date' => 'required|date',
        'status' => 'required',
        'image_upload' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $course->fill($request->only(['name', 'description', 'course_objectives', 'start_date', 'expiration_date', 'status']));

   
    if ($request->hasFile('image_upload')) {
        // Lógica para guardar la imagen del curso
        $originName = $request->file('image_upload')->getClientOriginalName(); 
        $name = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('image_upload')->getClientOriginalExtension();
    
        $fileName = $name.'_'.time().'.'.$extension;
    
        $request->file('image_upload')->move(public_path('courses_images'), $fileName);  
    
        $url = asset('courses_images/'.$fileName); 
        $course->image_url = $url;    
    }

    $course->save();

    // Eliminar las semanas asociadas al curso antes de crear las nuevas semanas
    $course->weeks()->delete();

    // Calcular y guardar las nuevas semanas asociadas al curso
    $startDate = Carbon::parse($request->start_date);
    $endDate = Carbon::parse($request->expiration_date);
    
    $weeks = [];
    $weekNumber = 1;
    while ($startDate->lte($endDate)) {
        $weeks[] = [
            'start_date' => $startDate->copy()->startOfWeek(),
            'end_date' => $startDate->copy()->endOfWeek(),
            'course_id' => $course->id,
            'number' => $weekNumber,
        ];
        $startDate->addWeek();
        $weekNumber++;
    }

    // Insertar en la base de datos
    Week::insert($weeks);

    return redirect()->route('courses.index')->with('success', 'Curso actualizado con éxito');
}


public function destroy($id)
{
    $course = Course::find($id);

    // Eliminar las semanas asociadas al curso antes de eliminar el curso
    $course->weeks()->delete();
    
    $course->delete();
    return redirect()->route('courses.index');
}

}

