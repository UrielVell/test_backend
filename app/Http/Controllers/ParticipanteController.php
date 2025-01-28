<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $participantes = Participante::all();
        return response()->json($participantes);
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
        $participante = new Participante;
        $participante->rfc = $request->rfc;
        $participante->nombre = $request->nombre;
        $participante->apellidoPaterno = $request->apellidoPaterno;
        $participante->apellidoMaterno = $request->apellidoMaterno;
        $participante->genero = $request->genero;
        $participante->noPersonal = $request->noPersonal;
        $participante->ocupacion = $request->ocupacion;
        $participante->gradoMaxEstudios = $request->gradoMaxEstudios;
        $participante->email = $request->email;
        $participante->ciudad = $request->ciudad;
        $participante->save();

        $data = [
            'message' => 'Participante creado exitosamente',
            'participante' =>$participante
        ];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Participante $participante)
    {
        return response()->json($participante);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participante $participante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Participante $participante)
    {
        $participante->rfc = $request->rfc;
        $participante->nombre = $request->nombre;
        $participante->apellidoPaterno = $request->apellidoPaterno;
        $participante->apellidoMaterno = $request->apellidoMaterno;
        $participante->genero = $request->genero;
        $participante->noPersonal = $request->noPersonal;
        $participante->ocupacion = $request->ocupacion;
        $participante->gradoMaxEstudios = $request->gradoMaxEstudios;
        $participante->email = $request->email;
        $participante->ciudad = $request->ciudad;
        $participante->save();
        $data = [
            'message' => 'Participante actualizado exitosamente',
            'participante' => $participante
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participante $participante)
    {
        $participante->delete();
        $data = [
            'message' => 'Participante eliminado exitosamente',
            'participante' => $participante
        ];
        return response()->json($data);
    }
}
