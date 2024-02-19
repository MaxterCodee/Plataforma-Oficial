<?php

namespace App\Http\Controllers;
use App\Models\Area;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    //
    public function index()
    {
        $areas = Area::all();
        return view('areas.index', compact('areas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Area::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('areas.index');

    }

    public function update(Request $request,  $id)
    {
        $area = Area::find($id);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $area->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('areas.index');
    }

    public function destroy($id)
    {
        $area = Area::find($id);
        $area->delete();
        return redirect()->route('areas.index');
    }



}
