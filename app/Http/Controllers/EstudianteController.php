<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Curso;

class EstudianteController extends Controller
{
    public function showAll() 
    {
        return Estudiante::all();
    }

    public function show(string $id)
    {
        return Estudiante::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Estudiante::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
        ]);
    }

    public function storeCurso(Request $request)
    {
        $curso = Curso::findOrFail($request->curso_id);
        Estudiante::findOrFail($request->estudiante_id)->cursos()->save($curso);
    }

    public function patch(Request $request)
    {
        $estudiante = Estudiante::findOrFail($request->id);
        $estudiante->nombre = $request->nombre ?? $estudiante->getOriginal('nombre');
        $estudiante->email = $request->email ?? $estudiante->getOriginal('email');
        $estudiante->save();
        return $estudiante;
    }

    public function delete(string $id)
    {
        return Estudiante::destroy($id);
    }
}
