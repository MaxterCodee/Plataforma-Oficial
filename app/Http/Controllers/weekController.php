<?php

namespace App\Http\Controllers;

use App\Models\Week;
use Illuminate\Http\Request;
use App\Models\Course;
use Carbon\Carbon;


class weekController extends Controller
{
    public function index($courseId)
    {
        $course = Course::findOrFail($courseId);
        $weeks = $course->weeks;

        return view('weeks.index', compact('course', 'weeks'));
    }

    public function createWeeksForCourse($startDate, $endDate, $courseId)
    {
        $weeks = [];
        $startDate = Carbon::parse($startDate); // Convertir la cadena de inicio a un objeto Carbon
        $endDate = Carbon::parse($endDate); // Convertir la cadena de finalización a un objeto Carbon

        $weekImages = glob(public_path('weeks_images/*'));

        $weekNumber = 1;
        while ($startDate->lte($endDate)) { // Ahora puedes usar ->lte() en objetos Carbon
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

        Week::insert($weeks);
    }
}

