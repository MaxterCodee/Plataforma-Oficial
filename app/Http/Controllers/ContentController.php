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

// public function upload(Request $request)
// {
   
//     if($request->hasFile('upload')){
//            $originName = $request->file('upload')->getClientOriginalName(); 
//            $name = pathinfo($originName, PATHINFO_FILENAME);
//            $extension = $request->file('upload')->
//            getClientOriginalExtension();

//            $fileName = $name.'_'.time().'.'.$extension;
            
//            $request->file('upload')->move(public_path('images'), $fileName);  
        
           
//                 $url = asset('images/'.$fileName); 
                
//                 return response()->json(['fileName'=>$fileName, 'uploaded'=>1, 'url'=>$url]);
//     }}
            




public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'markdown' => 'required',
        'lesson_id' => 'required',
    ]);

    // Obtener la lección asociada
    $lesson = Lesson::findOrFail($request->get('lesson_id'));


  // Obtener el último número de contenido para la lección actual
$lastContent = Content::where('lesson_id', $lesson->id)
->orderBy('number', 'desc')
->first();

// Determinar el nuevo número de contenido
$newNumber = $lastContent ? $lastContent->number + 0.1 : $lesson->number + 0.1;


    // Crear y guardar el nuevo contenido
    // Content::create([
    //     'number' => $newNumber,
    //     // 'title' => $request->input('title'),
    //     // 'title' => $request->title,
    //     'markdown' => $request->markdown,
    //     'lesson_id' => $lesson->id,
    // ]);

    $content = new Content();
    $content->number = $newNumber;
    $content->title = $request->get('title'); 
    $content->markdown = $request->get('markdown');
    $content->lesson_id = $lesson->id;
    $content->save();
                 
   
    return redirect()->route('content.index', ['lesson' => $lesson->id])
                     ->with('success', 'Content created successfully');
}


}

