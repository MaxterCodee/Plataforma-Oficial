<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    //
    public function index()
    {
        $exams = Exam::all();
        return view('exams.index', compact('exams'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            
        ]);

        Exam::create([
            'name' => $request->name,
            
        ]);

        return redirect()->route('exams.index');

    }

    public function update(Request $request,  $id)
    {
        $exam = Exam::find($id);
        $request->validate([
            'name' => 'required',
            // Añade aquí cualquier otro campo que necesites validar
        ]);

        $exam->update([
            'name' => $request->name,
            // Añade aquí cualquier otro campo que necesites actualizar
        ]);

        return redirect()->route('exams.index');
    }

    public function destroy($id)
    {
        $exam = Exam::find($id);
        $exam->delete();
        return redirect()->route('exams.index');
    }
    
}
