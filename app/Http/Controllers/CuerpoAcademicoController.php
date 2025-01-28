<?php

namespace App\Http\Controllers;

use App\Models\CuerpoAcademico;
use Illuminate\Http\Request;

class CuerpoAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cuerpoAcademicos = CuerpoAcademico::all();
        return response()->json($cuerpoAcademicos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cuerpoAcademico = new CuerpoAcademico;
        $cuerpoAcademico->claveCA = $request-> claveCA; 
        $cuerpoAcademico->nombreCA = $request-> nombreCA;
        $cuerpoAcademico->save();
        $data = [
            'mensaje' => 'Cuerpo academico fue creado satisfactoriamente',
            'cuerpoacademico' =>$cuerpoAcademico
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($claveCA)
    {
        $cuerpoAcademico = CuerpoAcademico::find($claveCA);

        if(!$cuerpoAcademico){
            return response() -> json(['message' => 'Cuerpo Academico no encontrado'], 404);
        }
        return response()->json($cuerpoAcademico);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CuerpoAcademico $cuerpoAcademico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CuerpoAcademico $cuerpoAcademico)
    {
        $cuerpoAcademico = CuerpoAcademico::find($request->claveCA); 
        $cuerpoAcademico->nombreCA = $request->nombreCA;
        $cuerpoAcademico->save();

        $data = [
            'mensaje' => 'Cuerpo academico fue modificado satisfactoriamente',
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CuerpoAcademico $cuerpoAcademico)
    {
        $cuerpoAcademico->delete();
        $data = [
            'mensaje' => 'Cuerpo academico eliminado satisfactoriamente',
            'cuerpoacademico' =>$cuerpoAcademico
        ];
        return response()->json($data);
    }
}
