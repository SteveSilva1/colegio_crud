<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function showAll() 
    {
        return Nota::all();
    }

    public function showByCurso(string $id)
    {
        return Nota::where('curso_id', $id)->get();
    }

    public function showByEstudiante(string $id)
    {
        return Nota::where('estudiante_id', $id)->get();
    }

    public function showByCursoAndEstudiante(Request $request)
    {
        return Nota::where([['curso_id', $request->curso_id], ['estudiante_id', $request->estudiante_id]])->get();
    }

    public function store(Request $request)
    {
        return Nota::create([
            'nota' => $request->nota,
            'curso_id' => $request->curso_id,
            'estudiante_id' => $request->estudiante_id,
        ]);
    }

    public function patch(Request $request)
    {
        $nota = Nota::where([['curso_id', $request->curso_id], ['estudiante_id', $request->estudiante_id]])->get();
        $nota->nota = $request->nota;
        $nota->save();
        return $nota;
    }

    public function delete(Request $request)
    {
        $nota = Nota::where([['curso_id', $request->curso_id], ['estudiante_id', $request->estudiante_id]])->get();
        $nota->delete();
    }
}
