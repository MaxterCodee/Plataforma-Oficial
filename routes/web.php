<?php

use App\Http\Controllers\ProfileController;
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

//Rutas pata afministrar examenes
Route::get('/exams', [App\Http\Controllers\ExamController::class, 'index'])->name('exams.index');
Route::post('/exams', [App\Http\Controllers\ExamController::class, 'store'])->name('exams.store');
//ruta para administrar tests
Route::get('/tests', [App\Http\Controllers\TestController::class, 'index'])->name('tests.index');
require __DIR__.'/auth.php';
