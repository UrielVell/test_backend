<?php

namespace App\Http\Controllers;

use App\Models\ArchivoEduContinua;
use App\Models\CursoEduContinua;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileEduContinuaController extends Controller
{
    public function reporteGeneral($idCurso)
    {
        $cursoEduContinua = CursoEduContinua::findOrFail($idCurso);
        $coordinador = $cursoEduContinua->academicos()->wherePivot('rol', 'coordinador')->get();
        $pdf = Pdf::loadView('EduContinua.ReporteGeneral', [
            'cursoEduContinua' => $cursoEduContinua->toArray(),
            'coordinador' => $coordinador
        ]);

        return $pdf->download('ReporteGeneral.pdf');
    }

    public function presupuesto($idCurso)
    {
        $cursoEduContinua = CursoEduContinua::findOrFail($idCurso);
        $pdf = Pdf::loadView('EduContinua.Presupuesto',  $cursoEduContinua->toArray());
        return $pdf->download('Presupuesto.pdf');
    }

    public function listaAsistencia($idCurso)
    {
        $cursoEduContinua = CursoEduContinua::findOrFail($idCurso);
        $academicos = $cursoEduContinua->academicos()
            ->select('academicos.noPersonal', 'nombre', 'apellidoPaterno', 'apellidoMaterno', 'academicos.genero', DB::raw("'Academico' as tipo"))
            ->wherePivot('rol', 'participante')
            ->orderBy('academicos.apellidoPaterno')
            ->orderBy('academicos.apellidoMaterno')
            ->get();

        $coordinador = $cursoEduContinua->academicos()
            ->select('academicos.noPersonal', 'nombre', 'apellidoPaterno', 'apellidoMaterno', 'academicos.genero', DB::raw("'Academico' as tipo"))
            ->wherePivot('rol', 'coordinador')
            ->get();

        $aprobados = 0;
        $aprobadosHombre = 0;
        $aprobadosMujer = 0;
        foreach ($academicos as $participante) {
            if ($participante->pivot->calificacion != null && $participante->pivot->calificacion >= 6) {
                $aprobados++;
                if ($participante->genero == 'masculino') {
                    $aprobadosHombre++;
                } else {
                    $aprobadosMujer++;
                }
            }
        }

        $instructoresAcademicos = $cursoEduContinua->academicos()
            ->select('academicos.noPersonal', 'nombre', 'apellidoPaterno', 'apellidoMaterno', DB::raw("'Instructor' as tipo"))
            ->wherePivot('rol', 'instructor')
            ->get();


        $instructoresExternos = $cursoEduContinua->externos()
            ->select('instructors.rfc', 'nombre', 'apellidoPaterno', 'apellidoMaterno')
            ->get();


        $publico = $cursoEduContinua->participantes()
            ->select('participantes.id', 'nombre', 'apellidoPaterno', 'apellidoMaterno', 'participantes.genero', DB::raw("'Publico' as tipo"))
            ->orderBy('participantes.apellidoPaterno')
            ->orderBy('participantes.apellidoMaterno')
            ->get();

        foreach ($publico as $participante) {
            if ($participante->pivot->calificacion != null && $participante->pivot->calificacion >= 6) {
                $aprobados++;
                if ($participante->genero == 'masculino') {
                    $aprobadosHombre++;
                } else {
                    $aprobadosMujer++;
                }
            }
        }

        $participantes = $academicos
            ->merge($publico)
            ->sortBy('apellidoPaterno');



        $constancias = $aprobados + sizeof($instructoresAcademicos) + sizeof($instructoresExternos) + 1;

        $data = [
            'curso' => $cursoEduContinua,
            'participantes' => $participantes,
            'coordinador' => $coordinador,
            'instructores' => sizeof($instructoresAcademicos) + sizeof($instructoresExternos),
            'aprobados' => $aprobados,
            'constancias' => $constancias,
            'aprobadosHombre' => $aprobadosHombre,
            'aprobadosMujer' => $aprobadosMujer
        ];

        $pdf = Pdf::loadView('EduContinua.ListaAsistencia', $data);

        return $pdf->download('ListaAsistencia.pdf');
    }

    public function directorio($idCurso)
    {
        $cursoEduContinua = CursoEduContinua::findOrFail($idCurso);
        $academicos = $cursoEduContinua->academicos()
            ->select('academicos.noPersonal', 'nombre', 'apellidoPaterno', 'apellidoMaterno', 'academicos.genero', 'academicos.email', DB::raw("'Academico' as ocupacion"), DB::raw("'Xalapa' as ciudad"))
            ->wherePivot('rol', 'participante')
            ->wherePivot('calificacion', '>=', 6)
            ->orderBy('academicos.apellidoPaterno')
            ->orderBy('academicos.apellidoMaterno')
            ->get();

        $publico = $cursoEduContinua->participantes()
            ->select('participantes.id', 'nombre', 'apellidoPaterno', 'apellidoMaterno', 'participantes.genero', 'gradoMaxEstudios', 'participantes.email', 'participantes.ciudad', 'participantes.ocupacion', DB::raw("'Publico' as tipo"))
            ->wherePivot('calificacion', '>=', 6)
            ->orderBy('participantes.apellidoPaterno')
            ->orderBy('participantes.apellidoMaterno')
            ->get();

        $participantes = $academicos
            ->merge($publico)
            ->sortBy('apellidoPaterno');

        $data = [
            'curso' => $cursoEduContinua->toArray(),
            'participantes' => $participantes
        ];

        $pdf = Pdf::loadView('EduContinua.Directorio', $data);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->download('DirectorioParticipantes.pdf');
    }

    function guardarArchivo(Request $request)
    {
        $path = "archivosEduContinua";

        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $filename = $file->getClientOriginalName();
            $file->storeAs($path, $filename, 'upload');

            $url = asset(url('/storage/' . $path, $filename));

            $archivo = new ArchivoEduContinua();
            $archivo->idCursoEduContinua = $request->idCurso;
            $archivo->nombreArchivo = $filename;
            $archivo->url = $url;
            $archivo->save();
            return response()->json([
                'message' => 'Archivo guardado correctamente',
                'idCurso' => $request->idCurso,
                'nombreArchivo' => $filename,
                'url' => $url
            ]);
        }else{
            return response()->json([
                'message' => 'Agregue un archivo',
                
            ]);
        }

        
    }

    function archivosCurso($idCurso)
    {
        $archivos = ArchivoEduContinua::where('idCursoEduContinua', $idCurso)->get();
        return response()->json($archivos);
    }
}
