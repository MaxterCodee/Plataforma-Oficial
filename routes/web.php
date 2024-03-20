<?php
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\SatisfactionTestController;
use App\Http\Controllers\weekController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\TestController;
use App\Models\SatisfactionQuestion;
use Illuminate\Support\Facades\Route;

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
Route::get('/careers', [CareerController::class, 'index'])->name('careers.index');
Route::post('/careers', [CareerController::class, 'store'])->name('careers.store');
Route::put('/careers/{id}', [CareerController::class, 'update'])->name('careers.update');
Route::delete('/careers/{id}', [CareerController::class, 'destroy'])->name('careers.destroy');


//Rutas para administrar areas
Route::get('/areas', [AreaController::class, 'index'])->name('areas.index');
Route::post('/areas', [AreaController::class, 'store'])->name('areas.store');
Route::put('/areas/{id}', [AreaController::class, 'update'])->name('areas.update');
Route::delete('/areas/{id}', [AreaController::class, 'destroy'])->name('areas.destroy');

//Rutas para administrar teachers
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');

//Rutas para administrar students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

//Rutas para administrar cursos
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::put('/cursos/{id}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('/cursos/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');

// rutas para semanas
Route::get('/week/{course}', [weekController::class, 'index'])->name('weeks.index');
Route::post('/week', [weekController::class, 'store'])->name('weeks.store');

// rutas lecciones
Route::get('/lessons/{week}', [LessonController::class, 'index'])->name('lessons.index');
Route::post('/lessons', [LessonController::class, 'store'])->name('lessons.store');

// rutas para contenido
Route::get('/content/{lesson}', [ContentController::class, 'index'])->name('content.index');
Route::post('/content', [ContentController::class, 'store'])->name('content.store');

//Rutas pata afministrar examenes
Route::get('/exams', [ExamController::class, 'index'])->name('exams.index');

//ruta para administrar tests
Route::get('/tests', [TestController::class, 'index'])->name('tests.index');
require __DIR__.'/auth.php';

Route::post('/prueba',[SatisfactionTestController::class,'index'])->name('pruebaDocente');
