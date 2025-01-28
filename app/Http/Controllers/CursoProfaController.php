<?php

namespace App\Http\Controllers;

use App\Models\Academico;
use App\Models\AcademicoCursoProfa;
use App\Models\cursoProfa;
use App\Models\CursoProfaAcademico;
use App\Models\ParticipanteProfa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CursoProfaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursoProfas = CursoProfa::where("estado", true)->get();
        return response()->json($cursoProfas);
    }

    public function historial()
    {
        $cursoProfas = CursoProfa::where("estado", false)->get();
        return response()->json($cursoProfas);
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
            'idg_curso' => 'required|numeric|unique:curso_profas|min_digits:4|max_digits:4'
        ], [
            'idg_curso.unique' => 'El IDG del curso ya esta registrado',
            'idg_curso.min_digits' => 'El IDG debe tener almenos de 4 digitos',
            'idg_curso.max_digits' => 'El IDG no debe tener mas de 4 digitos',
            'idg_curso.numeric' => 'El IDG del curso solo permite numeros'
        ]);

        if ($validaciones->fails()) {
            return response()->json([
                'error' => $validaciones->errors(),
            ], 422);
        }

        $cursoProfa = new CursoProfa;
        $cursoProfa->idg_curso = $request->idg_curso;
        $cursoProfa->nombreCurso = $request->nombreCurso;
        $cursoProfa->modalidad = $request->modalidad;
        $cursoProfa->descripcion = $request->descripcion;
        $cursoProfa->justificacion = $request->justificacion;
        $cursoProfa->objetivoGeneral = $request->objetivoGeneral;
        $cursoProfa->horasTeoricas = $request->horasTeoricas;
        $cursoProfa->horasPracticas = $request->horasPracticas;
        $cursoProfa->valorCreditos = $request->valorCreditos;
        $cursoProfa->fechaInicio = $request->fechaInicio;
        $cursoProfa->fechaFin = $request->fechaFin;
        $cursoProfa->horaInicio = $request->horaInicio;
        $cursoProfa->horaFin = $request->horaFin;
        $cursoProfa->fechaElaboracion = $request->fechaElaboracion;
        $cursoProfa->fechaModificacion = $request->fechaModificacion;
        $cursoProfa->unidadCompetencia = $request->unidadCompetencia;
        $cursoProfa->saberesTeoricos = $request->saberesTeoricos;
        $cursoProfa->estado = true;
        $cursoProfa->save();

        $data = [
            'message' => 'Curso creado correctamente.',
            'cursoprofa' => $cursoProfa
        ];

        return  response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $cursoProfa = CursoProfa::findOrFail($id);
        // Obtener los datos relacionados solo para el ID específico
        $academicos = $cursoProfa->academicos;

        return response()->json($cursoProfa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cursoProfa $cursoProfa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cursoProfa $cursoProfa)
    {
        $cursoProfa->nombreCurso = $request->nombreCurso;
        $cursoProfa->modalidad = $request->modalidad;
        $cursoProfa->descripcion = $request->descripcion;
        $cursoProfa->justificacion = $request->justificacion;
        $cursoProfa->objetivoGeneral = $request->objetivoGeneral;
        $cursoProfa->horasTeoricas = $request->horasTeoricas;
        $cursoProfa->horasPracticas = $request->horasPracticas;
        $cursoProfa->valorCreditos = $request->valorCreditos;
        $cursoProfa->fechaInicio = $request->fechaInicio;
        $cursoProfa->fechaFin = $request->fechaFin;
        $cursoProfa->horaInicio = $request->horaInicio;
        $cursoProfa->horaFin = $request->horaFin;
        $cursoProfa->fechaElaboracion = $request->fechaElaboracion;
        $cursoProfa->fechaModificacion = $request->fechaModificacion;
        $cursoProfa->unidadCompetencia = $request->unidadCompetencia;
        $cursoProfa->saberesTeoricos = $request->saberesTeoricos;
        $cursoProfa->update();

        $data = [
            'message' => 'Curso modificado correctamente.',
            'cursoprofa' => $cursoProfa
        ];

        return  response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cursoProfa $cursoProfa)
    {
        $cursoProfa->estado = false;
        $cursoProfa->save();

        $data = [
            'message' => 'El curso ha pasado a estar inactivo.',
            'cursoprofa' => $cursoProfa->nombreCurso
        ];

        return $data;
    }

    public function attach(Request $request)
    {

        $cursoProfa = CursoProfa::findOrFail($request->curso_profa_id);
        $academico = Academico::where("noPersonal", $request->noPersonal)->get()->first();
        $cursoProfa->academicos()->attach($academico, ['rol' => $request->rol]);

        return response()->json(['message' => 'Academico inscrito correctamente']);

        // $cursoProfa = CursoProfa::findOrFail($request->curso_profa_id);
        // $rol = $request->rol;
        // $rol2 = "Instructor";
        // if ($rol == $rol2) {
        //     $academico = Academico::where("noPersonal", $request->noPersonal )->get()->first();
        //     $cursoProfa->academicos()->attach($academico, ['rol' => $rol]);

        //     return response()->json(['message' => 'Academico inscrito correctamente']);
        // }else {

        //     $participante = ParticipanteProfa::findOrFail($request->noPersonal);

        //     $cursoProfa->academicos()->attach($participante, ['rol' => $request->rol]);

        //     return response()->json(['message' => 'Participante inscrito correctamente']);
        // }

    }

    public function detach(Request $request)
    {
        $cursoProfa = CursoProfa::findOrFail($request->curso_profa_id);
        $academico = Academico::findOrFail($request->noPersonal);

        // Adjunta el modelo Academico al modelo CursoProfa
        $cursoProfa->academicos()->detach($academico);

        return response()->json(['message' => 'Academico eliminado correctamente del curso']);
    }

    public function periodo(Request $request)
    {
        try {
            $fechaInicio = $request->input('fecha_inicio');
            $fechaFin = $request->input('fecha_fin');

            $eventos = cursoProfa::whereBetween('fechaInicio', [$fechaInicio, $fechaFin])->get();

            $respuesta = $eventos;
        } catch (\Throwable $th) {
            $respuesta = "no hay eventos";
        }

        return response()->json($respuesta);
    }

    public function asignarCalificacion(Request $request)
    {

        $curso = CursoProfa::find($request->curso_profa_id);

        if ($curso) {
            $curso->academicos()->updateExistingPivot($request->noPersonal, [
                'calificacion' => $request->calificacion,
            ]);

            $respuesta = "Calificación asignada";
        } else {
            $respuesta = 'No se pudo asignar la calificación';
        }

        return response()->json($respuesta);
    }
}
