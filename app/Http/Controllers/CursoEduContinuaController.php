<?php

namespace App\Http\Controllers;

use App\Models\Academico;
use App\Models\CursoEduContinua;
use App\Models\Instructor;
use App\Models\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CursoEduContinuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursoEduContinuas = CursoEduContinua::where("estadoCurso", true)->get();
        return response()->json($cursoEduContinuas);
    }

    public function historial()
    {
        $cursoEduContinuas = CursoEduContinua::where("estadoCurso", false)->get();
        return response()->json($cursoEduContinuas);
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
            'claveCurso' => 'required|unique:curso_edu_continuas'
        ], [
            'claveCurso.unique' => 'La clave del curso ya esta registrada',
        ]);

        if ($validaciones->fails()) {
            return response()->json([
                'error' => $validaciones->errors(),
            ], 422);
        }

        $cursoEduContinua = new CursoEduContinua;
        $cursoEduContinua->claveCurso = $request->claveCurso;
        $cursoEduContinua->nombreCurso = $request->nombreCurso;
        $cursoEduContinua->modalidad = $request->modalidad;
        $cursoEduContinua->estadoCurso = 1;
        $cursoEduContinua->tipo = $request->tipo;
        $cursoEduContinua->funcion = $request->funcion;
        $cursoEduContinua->region = $request->region;
        $cursoEduContinua->categoriaAtencion = $request->categoriaAtencion;
        $cursoEduContinua->cicloEscolar = $request->cicloEscolar;
        $cursoEduContinua->areaAcademica = $request->areaAcademica;
        $cursoEduContinua->entidadAcademica = $request->entidadAcademica;
        $cursoEduContinua->sede = $request->sede;
        $cursoEduContinua->direccionSede = $request->direccionSede;
        $cursoEduContinua->telefonoSede = $request->telefonoSede;
        $cursoEduContinua->ciudadSede = $request->ciudadSede;
        $cursoEduContinua->cuotaInscripcion = $request->cuotaInscripcion;
        $cursoEduContinua->constancia = $request->constancia;
        $cursoEduContinua->cuotaRecuperacion = $request->cuotaRecuperacion;
        $cursoEduContinua->cupoMinimo = $request->cupoMinimo;
        $cursoEduContinua->fechaInicio = $request->fechaInicio;
        $cursoEduContinua->fechaFin = $request->fechaFin;
        $cursoEduContinua->dirigido = $request->dirigido;
        $cursoEduContinua->temario = $request->temario;
        $cursoEduContinua->evaluacion = $request->evaluacion;
        $cursoEduContinua->horario = $request->horario;
        $cursoEduContinua->totalHoras = $request->totalHoras;
        $cursoEduContinua->noSesiones = $request->noSesiones;

        $cursoEduContinua->honorariosPersonal = $request->honorariosPersonal;
        $cursoEduContinua->beneficios = $request->beneficios;
        $cursoEduContinua->montoMaterialInsumos = $request->montoMaterialInsumos;
        $cursoEduContinua->apoyoAdministrativo = $request->apoyoAdministrativo;
        $cursoEduContinua->egreso = $request->egreso;
        $cursoEduContinua->ingreso = $request->ingreso;
        $cursoEduContinua->totalPresupuesto = $request->totalPresupuesto;
        $cursoEduContinua->claveCA = $request->claveCA;
        $cursoEduContinua->save();
        $data = [
            'mensaje' => 'El curso de Educación Continua fue creado satisfactoriamente',
            'cursoeducontinua' => $cursoEduContinua
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cursoEduContinua = CursoEduContinua::with(['academicos', 'externos'])->find($id);
        return response()->json($cursoEduContinua);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CursoEduContinua $cursoEduContinua)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CursoEduContinua $cursoEduContinua)
    {
        $cursoEduContinua->claveCurso = $request->claveCurso;
        $cursoEduContinua->nombreCurso = $request->nombreCurso;
        $cursoEduContinua->modalidad = $request->modalidad;
        $cursoEduContinua->estadoCurso = $request->estadoCurso;
        $cursoEduContinua->tipo = $request->tipo;
        $cursoEduContinua->funcion = $request->funcion;
        $cursoEduContinua->region = $request->region;
        $cursoEduContinua->categoriaAtencion = $request->categoriaAtencion;
        $cursoEduContinua->cicloEscolar = $request->cicloEscolar;
        $cursoEduContinua->areaAcademica = $request->areaAcademica;
        $cursoEduContinua->entidadAcademica = $request->entidadAcademica;
        $cursoEduContinua->sede = $request->sede;
        $cursoEduContinua->direccionSede = $request->direccionSede;
        $cursoEduContinua->telefonoSede = $request->telefonoSede;
        $cursoEduContinua->ciudadSede = $request->ciudadSede;
        $cursoEduContinua->cuotaInscripcion = $request->cuotaInscripcion;
        $cursoEduContinua->constancia = $request->constancia;


        $cursoEduContinua->fechaInicio = $request->fechaInicio;
        $cursoEduContinua->fechaFin = $request->fechaFin;
        $cursoEduContinua->dirigido = $request->dirigido;
        $cursoEduContinua->temario = $request->temario;
        $cursoEduContinua->evaluacion = $request->evaluacion;
        $cursoEduContinua->horario = $request->horario;
        $cursoEduContinua->totalHoras = $request->totalHoras;
        $cursoEduContinua->noSesiones = $request->noSesiones;

        $cursoEduContinua->cuotaRecuperacion = $request->cuotaRecuperacion;
        $cursoEduContinua->cupoMinimo = $request->cupoMinimo;
        $cursoEduContinua->honorariosPersonal = $request->honorariosPersonal;
        $cursoEduContinua->montoMaterialInsumos = $request->montoMaterialInsumos;

        $cursoEduContinua->beneficios = $request->beneficios;

        $cursoEduContinua->apoyoAdministrativo = $request->apoyoAdministrativo;
        $cursoEduContinua->egreso = $request->egreso;
        $cursoEduContinua->ingreso = $request->ingreso;
        $cursoEduContinua->totalPresupuesto = $request->totalPresupuesto;
        $cursoEduContinua->claveCA = $request->claveCA;
        $cursoEduContinua->save();
        $data = [
            'mensaje' => 'El curso de Educación Continua fue modificado satisfactoriamente',
            'cursoeducontinua' => $cursoEduContinua
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cursoEduContinua = CursoEduContinua::find($id);
        $cursoEduContinua->estadoCurso = false;
        $cursoEduContinua->save();
        return response()->json(['mensaje' => 'El estado del curso ha pasado a inactivo']);
    }

    public function vincularAcademico(Request $request)
    {
        $cursoEduContinua = CursoEduContinua::findOrFail($request->idCurso);
        $academico = Academico::findOrFail($request->noPersonal);
        $data = [
            'mensaje' => 'Académico asignado correctamente',
        ];

        $cursoEduContinua->academicos()->attach($academico, ['rol' => $request->rol]);
        return response()->json($data);
    }

    public function eliminarAcademico(Request $request)
    {
        $cursoEduContinua = CursoEduContinua::findOrFail($request->idCurso);
        $academico = Academico::findOrFail($request->noPersonal);
        $cursoEduContinua->academicos()->detach($academico);

        $data = [
            'mensaje' => 'Académico eliminado correctamente',
        ];

        return response()->json($data);
    }

    public function vincularExterno(Request $request)
    {
        $cursoEduContinua = CursoEduContinua::findOrFail($request->idCurso);
        $externo = Instructor::findOrFail($request->rfc);
        $data = [
            'mensaje' => 'Persona externa asignada correctamente',
        ];
        switch ($request->rol) {
            case 'participante':
                $cursoEduContinua->externos()->attach($externo, ['rol' => $request->rol]);
                return response()->json($data);
                break;
            case 'instructor':
                $cursoEduContinua->externos()->attach($externo, ['rol' => $request->rol]);
                return response()->json($data);
                break;
        }
    }

    public function eliminarExterno(Request $request)
    {
        $cursoEduContinua = CursoEduContinua::findOrFail($request->idCurso);
        $externo = Instructor::findOrFail($request->rfc);
        $cursoEduContinua->externos()->detach($externo);

        $data = [
            'mensaje' => 'Instructor eliminado correctamente',
        ];

        return response()->json($data);
    }

    public function vincularParticipante(Request $request)
    {
        $cursoEduContinua = CursoEduContinua::findOrFail($request->idCurso);
        $participante = Participante::findOrFail($request->idParticipante);
        $data = [
            'mensaje' => 'Participante asignado correctamente',
        ];
        $cursoEduContinua->participantes()->attach($participante);
        return response()->json($data);
    }


    public function eliminarParticipante(Request $request)
    {
        $cursoEduContinua = CursoEduContinua::findOrFail($request->idCurso);
        $participante = Participante::findOrFail($request->idParticipante);
        $data = [
            'mensaje' => 'Participante eliminado correctamente',
        ];

        $cursoEduContinua->participantes()->detach($participante);

        return response()->json($data);
    }

    public function participantes($id)
    {
        $cursoEduContinua = CursoEduContinua::with(['academicos', 'participantes'])->find($id);

        $academicos = $cursoEduContinua->academicos()->wherePivot('rol', 'participante')->get();
        $participantes = $cursoEduContinua->participantes;

        $data = [
            "academicos" => $academicos,
            "participantes" => $participantes
        ];

        return response()->json($data);
    }

    public function subirComprobanteParticipante(Request $request)
    {
        if ($request->hasFile('comprobante')) {
            $imagen = $request->file('comprobante');

            $path = $imagen->store('comprobantes', 'public');

            if ($path) {

                $url = asset(url('/storage/' . $path));

                $curso = CursoEduContinua::find($request->idCurso);
                $curso->participantes()->updateExistingPivot(
                    $request->idParticipante,
                    [
                        'comprobante' => $url
                    ]
                );

                return response()->json([
                    'mensaje' => 'Comprobante guardado exitosamente',
                    'url' => $url
                ]);
            } else {
                return response()->json(['error' => 'No se ha podido guardar el comprobante, inténtelo de nuevo.']);
            }
        } else {
            return response()->json(['error' => 'No se ha recibido ninguna imagen'], 400);
        }
    }

    public function subirComprobanteAcademico(Request $request)
    {
        if ($request->hasFile('comprobante')) {
            $imagen = $request->file('comprobante');

            $path = $imagen->store('comprobantes', 'public');

            if ($path) {

                $url = asset(url('/storage/' . $path));

                $curso = CursoEduContinua::find($request->idCurso);
                $curso->academicos()->updateExistingPivot(
                    $request->noPersonal,
                    [
                        'comprobante' => $url
                    ]
                );

                return response()->json([
                    'mensaje' => 'Comprobante guardado exitosamente',
                    'url' => $url
                ]);
            } else {
                return response()->json(['error' => 'No se ha podido guardar el comprobante, inténtelo de nuevo.']);
            }
        } else {
            return response()->json(['error' => 'No se ha recibido ninguna imagen'], 400);
        }
    }

    public function asignarCalificacionParticipante(Request $request)
    {
        $curso = CursoEduContinua::find($request->idCurso);
        if ($curso) {
            $curso->participantes()->updateExistingPivot(
                $request->idParticipante,
                ['calificacion' => $request->calificacion]
            );
            return response()->json(['mensaje' => 'Calificación asignada correctamente']);
        } else {
            return response()->json(['mensaje' => 'Ocurrio un error al asignar la calificación']);
        }
    }

    public function asignarCalificacionAcademico(Request $request)
    {
        $curso = CursoEduContinua::find($request->idCurso);
        if ($curso) {
            $curso->academicos()->updateExistingPivot(
                $request->noPersonal,
                ['calificacion' => $request->calificacion]
            );
            return response()->json(['mensaje' => 'Calificación asignada correctamente']);
        } else {
            return response()->json(['mensaje' => 'Ocurrio un error al asignar la calificación']);
        }
    }
}
