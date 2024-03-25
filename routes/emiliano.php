<?php

use App\Http\Controllers\SatisfactionTestController;
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

Route::get('/evdocente',[SatisfactionTestController::class,'showQuestions'])->name('showQuestions');

Route::post('/resultados',[SatisfactionTestController::class,'index'])->name('califProfe');