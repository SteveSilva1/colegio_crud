<?php

namespace App\Http\Controllers;
use App\Models\Materia;

use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function showAll() 
    {
        return Materia::all();
    }

    public function show(string $id)
    {
        return Materia::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Materia::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);
    }

    public function patch(Request $request)
    {
        $materia = Materia::findOrFail($request->id);
        $materia->nombre = $request->nombre ?? $materia->getOriginal('nombre');
        $materia->descripcion = $request->descripcion ?? $materia->getOriginal('descripcion');
        $materia->save();
        return $materia;
    }

    public function delete(string $id)
    {
        return Materia::destroy($id);
    }
}
