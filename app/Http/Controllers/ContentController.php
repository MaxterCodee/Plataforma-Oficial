<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Week;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    //
    public function index($lessonId)
    {
        $lesson = Lesson::findOrFail($lessonId);
        $content = $lesson->content;
        $week = Week::findOrFail($lesson->week()->first()->id);
        $lessons = $week->lessons;
    
        return view('lessons.index', compact('lesson', 'content', 'lessons' ,'week'));
    }

    public function lesson()
{
    return $this->belongsTo(Lesson::class);
}

public function week()
{
    return $this->belongsTo(Week::class);
}
// Obtener la semana asociada

public function upload(Request $request)
{
    // if($request->hasFile('upload')){
    //    $originName = $request->file('upload')->getClientOriginalName(); 
    //    $name = pathinfo($originName, PATHINFO_FILENAME);
    //    $extension = $request->file('upload')->getClientOriginalExtension();
    //    $fileName = $name.'_'.time().'.'.$extension;
        
    //    $request->file('upload')->move(public_path('images'), $fileName);  
    
    //      $CKEditorFuncNum = $request->input('CKEditorFuncNum');
    //         $url = asset('images/'.$fileName); 
    //         $message = 'Archivo subido correctamente';
    //         $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";
    //         @header('content-type: text/html; charset=utf-8');
    //         echo $response;
    //     }
    if($request->hasFile('upload')){
           $originName = $request->file('upload')->getClientOriginalName(); 
           $name = pathinfo($originName, PATHINFO_FILENAME);
           $extension = $request->file('upload')->
           getClientOriginalExtension();

           $fileName = $name.'_'.time().'.'.$extension;
            
           $request->file('upload')->move(public_path('images'), $fileName);  
        
           
                $url = asset('images/'.$fileName); 
                
                return response()->json(['fileName'=>$fileName, 'uploaded'=>1, 'url'=>$url]);
    }
            


}

public function store(Request $request)
{
    $request->validate([
        'number' => 'required',
        'markdown' => 'required',
        'lesson_id' => 'required',
    ]);

    // Obtener la lección asociada
    $lesson = Lesson::findOrFail($request->get('lesson_id'));
    $week = Week::findOrFail($lesson->week()->first()->id);

    
    Content::create([
        'number' => $request->number,
        'markdown' => $request->markdown,
        'lesson_id' => $lesson->id,
    ]);


    // Crear y guardar el nuevo contenido
    // $content = new Content();
    // $content->number = $request->get('number');
    // $content->markdown = $request->get('markdown');

    // Asignar la lección asociada
    // $content->lesson()->associate($lesson);
    // // Asignar la semana asociada
    // $lesson->week()->associate($week);

    // $content->save(); // Save the content, not the lesson

    return redirect()->route('content.index', ['lesson' => $lesson->id])
                 ->with('success', 'Content created successfully');

}


}

