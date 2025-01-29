<?php

use App\Models\CursoEduContinua;
use App\Models\cursoProfa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('curso/{idg_curso}', function ($idg_curso) {
//     $cursoProfa = cursoProfa::findOrFail($idg_curso);
//         $academicos = $cursoProfa->academicos;
//         $pdf = Pdf::loadView('lista3', $cursoProfa->toArray());
//         $pdf->setPaper('a4', 'landscape');
//         return $pdf->stream('listaProfa.pdf'); 
// });


/*
Route::get('curso/{idg_curso}', function ($idCurso) {
    $cursoEduContinua = CursoEduContinua::findOrFail($idCurso);
    $coordinador = $cursoEduContinua->academicos()->wherePivot('rol', 'coordinador')->get();
    $pdf = Pdf::loadView('EduContinua.ReporteGeneral', [
        'cursoEduContinua' => $cursoEduContinua->toArray(),
        'coordinador' => $coordinador
    ]);

    return $pdf->stream('ReporteGeneral.pdf');
});

Route::get('presupuesto/{idg_curso}', function ($idCurso) {
    $cursoEduContinua = CursoEduContinua::findOrFail($idCurso);
    $pdf = Pdf::loadView('EduContinua.presupuesto',  $cursoEduContinua->toArray());
    return $pdf->stream('Presupuesto.pdf');
});

Route::get('listaAsistencia/{idg_curso}', function ($idCurso) {
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

    return $pdf->stream('ListaAsistencia');
    // return response()->json($data);
});

Route::get('directorio/{idg_curso}', function ($idCurso) {
    $cursoEduContinua = CursoEduContinua::findOrFail($idCurso);
    $academicos = $cursoEduContinua->academicos()
        ->select('academicos.noPersonal', 'nombre', 'apellidoPaterno', 'apellidoMaterno', 'academicos.genero', 'academicos.email', DB::raw("'Academico' as ocupacion"), DB::raw("'Xalapa' as ciudad"))
        ->wherePivot('rol', 'participante')
        ->wherePivot('calificacion', '>=', 6)
        ->orderBy('academicos.apellidoPaterno')
        ->orderBy('academicos.apellidoMaterno')
        ->get();

    $publico = $cursoEduContinua->participantes()
        ->select('participantes.id', 'nombre', 'apellidoPaterno', 'apellidoMaterno', 'participantes.genero', 'gradoMaxEstudios', 'participantes.email', 'participantes.ciudad', 'participantes.ocupacion' ,DB::raw("'Publico' as tipo"))
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



    // return response()->json($data);


    $pdf = Pdf::loadView('EduContinua.Directorio', $data);
    $pdf->setPaper('a4', 'landscape');
    return $pdf->stream('ListaAsistencia');
});
*/