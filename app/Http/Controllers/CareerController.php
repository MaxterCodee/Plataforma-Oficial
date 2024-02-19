<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    //
    public function index()
    {
        $careers = Career::all();
        return view('careers.index', compact('careers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ajusta los tipos de archivo según tus necesidades
        ]);

        $image = $request->file('image_url');
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('images/careers', $imageName, 'public');

        Career::create([
            'name' => $request->name,
            'image_url' => 'storage/images/careers/'.$imageName,
        ]);

        return redirect()->route('careers.index');

    }
    public function update(Request $request,  $id)
    {
        $career = Career::find($id);
        $request->validate([
            'name' => 'required',
            'image_url' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Puedes ajustar según tus necesidades
        ]);

        // Verifica si se proporcionó una nueva imagen
        if ($request->hasFile('image_url')) {
            // Elimina la imagen antigua
            Storage::delete('public/' . $career->image_url);

            // Procesa y almacena la nueva imagen
            $newImage = $request->file('image_url');
            $newImageName = time() . '.' . $newImage->extension();
            $newImage->storeAs('public/images/careers', $newImageName);

            // Actualiza la ruta de la imagen en la base de datos
            $career->update([
                'name' => $request->name,
                'image_url' => 'storage/images/careers/' . $newImageName,
            ]);
        } else {
            // Si no se proporciona una nueva imagen, actualiza solo el nombre y conserva la imagen existente
            $career->update([
                'name' => $request->name,
            ]);
        }

        return redirect()->route('careers.index');
    }

    public function destroy($id)
    {
        $career = Career::find($id);
        Storage::delete('public/' . $career->image_url);
        $career->delete();
        return redirect()->route('careers.index');
    }
}
