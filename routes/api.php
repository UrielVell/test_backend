<?php

use App\Http\Controllers\AcademicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CursoEduContinuaController;
use App\Http\Controllers\CursoProfaController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FileEduContinuaController;
use App\Http\Controllers\FileProfaController;
use App\Http\Controllers\InstructorController;
use App\Models\Academico;
use App\Models\CursoEduContinua;
use App\Models\File;
use FontLib\Table\Type\name;

/*Route::get('/user', function (Request $request) {
   return $request->user();
})->middleware('auth:sanctum');*/


//rutas de los participantes
Route::get('/participantes','App\Http\Controllers\ParticipanteController@index');
Route::post('/participantes','App\Http\Controllers\ParticipanteController@store');
Route::get('/participantes/{participante}','App\Http\Controllers\ParticipanteController@show');
Route::put('/participantes/{participante}','App\Http\Controllers\ParticipanteController@update');
Route::delete('/participantes/{participante}','App\Http\Controllers\ParticipanteController@destroy');

//rutas de los cursos de educacion continua
Route::get('/cursoEduContinuas','App\Http\Controllers\CursoEduContinuaController@index');
Route::get('/cursoEduContinuas/historial','App\Http\Controllers\CursoEduContinuaController@historial');
Route::post('/cursoEduContinuas','App\Http\Controllers\CursoEduContinuaController@store');
Route::post('/cursoEduContinuas/detach','App\Http\Controllers\CursoEduContinuaController@detach');
Route::get('/cursoEduContinuas/{id}','App\Http\Controllers\CursoEduContinuaController@show');
Route::put('/cursoEduContinuas/{cursoEduContinua}','App\Http\Controllers\CursoEduContinuaController@update');
Route::delete('/cursoEduContinuas/{id}','App\Http\Controllers\CursoEduContinuaController@destroy');
Route::post('/cursoEduContinuas/vincularAcademico',[CursoEduContinuaController::class, 'vincularAcademico']);
Route::post('/cursoEduContinuas/eliminarAcademico',[CursoEduContinuaController::class, 'eliminarAcademico']);
Route::post('/cursoEduContinuas/vincularExterno',[CursoEduContinuaController::class, 'vincularExterno']);
Route::post('/cursoEduContinuas/eliminarExterno',[CursoEduContinuaController::class, 'eliminarExterno']);
Route::post('/cursoEduContinuas/vincularParticipante',[CursoEduContinuaController::class, 'vincularParticipante']);
Route::post('/cursoEduContinuas/eliminarParticipante',[CursoEduContinuaController::class, 'eliminarParticipante']);
Route::get('/cursoEduContinuas/participantes/{id}',[CursoEduContinuaController::class, 'participantes']);
Route::post('/cursoEduContinuas/comprobanteParticipante',[CursoEduContinuaController::class, 'subirComprobanteParticipante']);
Route::post('/cursoEduContinuas/comprobanteAcademico',[CursoEduContinuaController::class, 'subirComprobanteAcademico']);
Route::post('/cursoEduContinuas/calificacionParticipante',[CursoEduContinuaController::class, 'asignarCalificacionParticipante']);
Route::post('/cursoEduContinuas/calificacionAcademico',[CursoEduContinuaController::class, 'asignarCalificacionAcademico']);
Route::post('/cursoEduContinuas/subirArchivo',[FileEduContinuaController::class, 'guardarArchivo']);
Route::get('/cursoEduContinuas/archivos/{idCurso}',[FileEduContinuaController::class, 'archivosCurso']);

Route::get('/cursoEduContinuas/reporteGeneral/{idCurso}',[FileEduContinuaController::class, 'reporteGeneral']);
Route::get('/cursoEduContinuas/presupuesto/{idCurso}',[FileEduContinuaController::class, 'presupuesto']);
Route::get('/cursoEduContinuas/listaAsistencia/{idCurso}',[FileEduContinuaController::class, 'listaAsistencia']);
Route::get('/cursoEduContinuas/directorio/{idCurso}',[FileEduContinuaController::class, 'directorio']);
//rutas de loas academicos
Route::get('/academicos','App\Http\Controllers\AcademicoController@index');
Route::post('/academicos','App\Http\Controllers\AcademicoController@store');
Route::get('/academicos/{academico}','App\Http\Controllers\AcademicoController@show');
Route::put('/academicos/{academico}','App\Http\Controllers\AcademicoController@update');
Route::delete('/academicos/{academico}','App\Http\Controllers\AcademicoController@destroy');
Route::get('/academicos/cursos/{noPersonal}',[AcademicoController::class, 'verCursos']);

//rutas de los cursos de profa
Route::get('/cursosProfa','App\Http\Controllers\CursoProfaController@index');
Route::post('/cursoProfa','App\Http\Controllers\CursoProfaController@store');
Route::post('/cursoProfa/attach','App\Http\Controllers\CursoProfaController@attach');
Route::get('/cursoProfa/{id}','App\Http\Controllers\CursoProfaController@show');
Route::put('/cursoProfa/{cursoProfa}','App\Http\Controllers\CursoProfaController@update');
Route::delete('/cursoProfa/{cursoProfa}','App\Http\Controllers\CursoProfaController@destroy');
Route::get('/cursoProfa/{id}/conteoParticipantes','App\Http\Controllers\CursoProfaController@contarParticipantesProfaPorGenero');
Route::post('/cursoProfa/uploadProfa', [FileProfaController::class, 'upload']);
Route::post('/cursoProfa/detach',[CursoProfaController::class, 'detach']);
Route::post('/cursoProfa/reportes', [FileProfaController::class, 'getArchivos']);
Route::get('/cursoProfa/{id}/listaParticipantes', [FileProfaController::class, 'listaParticipantes']);
Route::get('/cursosProfa/periodo', [CursoProfaController::class, 'periodo']);
Route::post('/cursosProfa/asignarCalificacion', [CursoProfaController::class, 'asignarCalificacion']);
Route::get('/cursosProfa/historial', [CursoProfaController::class, 'historial']);



//rutas de los instructores
Route::get('/instructors','App\Http\Controllers\InstructorController@index');
Route::post('/instructors','App\Http\Controllers\InstructorController@store');
Route::get('/instructors/{instructor}','App\Http\Controllers\InstructorController@show');
Route::put('/instructors/{instructor}','App\Http\Controllers\InstructorController@update');
Route::delete('/instructors/{instructor}','App\Http\Controllers\InstructorController@destroy');
Route::post('/instructors/subirArchivo',[InstructorController::class, 'guardarArchivo']);
Route::get('/instructors/archivos/{rfc}',[InstructorController::class, 'archivosInstructor']);

//rutas del cuerpo academico
Route::get('/cuerpoAcademicos','App\Http\Controllers\CuerpoAcademicoController@index');
Route::post('/cuerpoAcademicos','App\Http\Controllers\CuerpoAcademicoController@store');
Route::get('/cuerpoAcademicos/{cuerpoacademico}','App\Http\Controllers\CuerpoAcademicoController@show');
Route::put('/cuerpoAcademicos/{cuerpoacademico}','App\Http\Controllers\CuerpoAcademicoController@update');
Route::delete('/cuerpoAcademicos/{cuerpoacademico}','App\Http\Controllers\CuerpoAcademicoController@destroy');

//ruta de registrar
Route::post('/register', [AuthController::class, 'register']);

//ruta de login
Route::post('/login', [AuthController::class, 'login']);

/*Route::group(['middleware'=> 'auth:sanctum'],function (){    

   Route::post('/logout', [AuthController::class, 'logout']);
   
   });*/
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::post('/upload', [FileController::class, 'upload']);
Route::get('/archivos', [FileController::class, 'getArchivos']);
