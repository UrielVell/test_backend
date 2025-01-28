<?php

namespace App\Http\Controllers;

use App\Models\Academico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academicos = Academico::all();
        return response()->json($academicos);
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
        $validaciones = Validator::make($request->all(), [
            'noPersonal' => 'required|unique:academicos|max:6',
            'nombre' => 'required',
            'genero' => 'required',
            'entidadAcademica' => 'required',
        ], [
            'noPersonal.unique' => 'El numero del personal ya esta asignado a un academico'
        ]);

        if ($validaciones->fails()) {
            return response()->json([
                'error' => $validaciones->errors('noPersonal'),
            ], 422);
        }

        $academico = new Academico;
        $academico->noPersonal = $request->noPersonal;
        $academico->nombre = $request->nombre;
        $academico->apellidoPaterno = $request->apellidoPaterno;
        $academico->apellidoMaterno = $request->apellidoMaterno;
        $academico->nombre = $request->nombre;
        $academico->genero = $request->genero;
        $academico->telParticular = $request->telParticular;
        $academico->telCelular = $request->telCelular;
        $academico->telOficina = $request->telOficina;
        $academico->email = $request->email;
        $academico->entidadAcademica = $request->entidadAcademica;
        $academico->tipoContratacion = $request->tipoContratacion;
        $academico->categoriaContratacion = $request->categoriaContratacion;
        $academico->domicilio = $request->domicilio;
        $academico->antiguedad = $request->antiguedad;
        $academico->obraEscrita = $request->obraEscrita;
        $academico->cursosImpartidos = $request->cursosImpartidos;
        $academico->save();
        $data = [
            'mensaje' => 'Academico creado satisfactoriamente',
            'academico' => $academico
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Academico $academico)
    {
        return response()->json($academico);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Academico $academico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Academico $academico)
    {
        $academico->nombre = $request->nombre;
        $academico->apellidoPaterno = $request->apellidoPaterno;
        $academico->apellidoMaterno = $request->apellidoMaterno;
        $academico->telParticular = $request->telParticular;
        $academico->genero = $request->genero;
        $academico->telCelular = $request->telCelular;
        $academico->telOficina = $request->telOficina;
        $academico->email = $request->email;
        $academico->entidadAcademica = $request->entidadAcademica;
        $academico->tipoContratacion = $request->tipoContratacion;
        $academico->categoriaContratacion = $request->categoriaContratacion;
        $academico->domicilio = $request->domicilio;
        $academico->antiguedad = $request->antiguedad;
        $academico->obraEscrita = $request->obraEscrita;
        $academico->cursosImpartidos = $request->cursosImpartidos;
        $academico->save();
        $data = [
            'mensaje' => 'Academico modificado satisfactoriamente',
            'academico' => $academico
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Academico $academico)
    {
        $academico->delete();
        $data = [
            'mensaje' => 'Academico eliminado satisfactoriamente',
            'academico' => $academico
        ];
        return response()->json($data);
    }

    public function verCursos($noPersonal)
    {
        $academico = Academico::findOrFail($noPersonal);
        $cursosProfa = $academico->cursos;
        $cursosEduContinua = $academico->cursosEduContinua;

        $data = [
            'cursosProfa' => $cursosProfa,
            'cursosEduContinua' => $cursosEduContinua
        ];

        return response()->json($data);
    }
}
