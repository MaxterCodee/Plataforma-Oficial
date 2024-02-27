<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'competencias' => 'nullable|array', // Ajusta según tus necesidades
        ]);

        // Procesa las competencias
        $competencias = $request->input('competencias');

        // Convierte el array de competencias en una cadena para almacenar en la base de datos
        $competenciasString = implode(',', $competencias);

        Competencia::create([
            'competencias' => $competenciasString,
        ]);

        // Resto de la lógica...
    }
}
