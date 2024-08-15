<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function showAll() 
    {
        return Curso::all();
    }

    public function show(string $id)
    {
        return Curso::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Curso::create([
            'nombre' => $request->nombre,
            'materia_id' => $request->materia_id,
        ]);
    }

    public function patch(Request $request)
    {
        $curso = Curso::findOrFail($request->id);
        $curso->nombre = $request->nombre ?? $curso->getOriginal('nombre');
        $curso->materia_id = $request->materia_id ?? $curso->getOriginal('materia_id');
        $curso->save();
        return $curso;
    }

    public function delete(string $id)
    {
        return Curso::destroy($id);
    }
}
