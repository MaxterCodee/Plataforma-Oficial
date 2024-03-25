<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\weekController;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\RequiresElement;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Rutas para administrar  Carreras
Route::get('/careers', [App\Http\Controllers\CareerController::class, 'index'])->name('careers.index');
Route::post('/careers', [App\Http\Controllers\CareerController::class, 'store'])->name('careers.store');
Route::put('/careers/{id}', [App\Http\Controllers\CareerController::class, 'update'])->name('careers.update');
Route::delete('/careers/{id}', [App\Http\Controllers\CareerController::class, 'destroy'])->name('careers.destroy');


//Rutas para administrar areas
Route::get('/areas', [App\Http\Controllers\AreaController::class, 'index'])->name('areas.index');
Route::post('/areas', [App\Http\Controllers\AreaController::class, 'store'])->name('areas.store');
Route::put('/areas/{id}', [App\Http\Controllers\AreaController::class, 'update'])->name('areas.update');
Route::delete('/areas/{id}', [App\Http\Controllers\AreaController::class, 'destroy'])->name('areas.destroy');

//Rutas para administrar teachers
Route::get('/teachers', [App\Http\Controllers\TeacherController::class, 'index'])->name('teachers.index');

//Rutas para administrar students
Route::get('/students', [App\Http\Controllers\StudentController::class, 'index'])->name('students.index');

//Rutas para administrar cursos
Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('courses.index');
Route::post('/courses', [App\Http\Controllers\CourseController::class, 'store'])->name('courses.store');
Route::put('/cursos/{id}', [App\Http\Controllers\CourseController::class, 'update'])->name('courses.update');
Route::delete('/cursos/{id}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('courses.destroy');

// rutas para semanas
Route::get('/week/{course}', [weekController::class, 'index'])->name('weeks.index');
Route::post('/week', [App\Http\Controllers\weekController::class, 'store'])->name('weeks.store');

// rutas lecciones
Route::get('/lessons/{week}', [App\Http\Controllers\LessonController::class, 'index'])->name('lessons.index');
Route::post('/lessons', [App\Http\Controllers\LessonController::class, 'store'])->name('lessons.store');

// rutas para contenido
Route::get('/content/{lesson}', [App\Http\Controllers\ContentController::class, 'index'])->name('content.index');
Route::post('/content', [App\Http\Controllers\ContentController::class, 'store'])->name('content.store');
Route::post('/upload', [App\Http\Controllers\ContentController::class, 'upload'])->name('content.upload');//ver si se le puede cambiar nombre ya lueguito <3

//Rutas pata afministrar examenes
Route::get('/exams', [App\Http\Controllers\ExamController::class, 'index'])->name('exams.index');

//ruta para administrar tests
Route::get('/tests', [App\Http\Controllers\TestController::class, 'index'])->name('tests.index');
require __DIR__.'/auth.php';


// ruta para probar ckeditor
Route::get('/ckeditor', function () {
    return view('lessons/ckeditor');
});

require "../routes/emiliano.php";