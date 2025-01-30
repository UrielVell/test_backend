<?php

namespace App\Http\Controllers;

use App\Models\ArchivoInstructor;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructors = Instructor::all();
        return response()->json($instructors);
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
        $instructor = new Instructor;
        $instructor->rfc = $request->rfc;
        $instructor->nombre = $request->nombre;
        $instructor->apellidoPaterno = $request->apellidoPaterno;
        $instructor->apellidoMaterno = $request->apellidoMaterno;
        $instructor->telefono = $request->telefono;
        $instructor->correo = $request->correo;
        $instructor->estudios = $request->estudios;
        $instructor->save();
        $data = [
            'mensaje' => 'Instructor creado satisfactoriamente',
            'instructor'=>$instructor
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
        return response()->json($instructor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instructor $instructor)
    {
        $instructor->rfc = $request->rfc;
        $instructor->nombre = $request->nombre;
        $instructor->apellidoPaterno = $request->apellidoPaterno;
        $instructor->apellidoMaterno = $request->apellidoMaterno;
        $instructor->telefono = $request->telefono;
        $instructor->correo = $request->correo;
        $instructor->estudios = $request->estudios;
        $instructor->save();
        $data = [
            'mensaje' => 'Instructor modificado satisfactoriamente',
            'instructor'=>$instructor
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        $instructor->delete();
        $data = [
            'mensaje' => 'Instructor eliminado satisfactoriamente',
            'instructor'=>$instructor
        ];
        return response()->json($data);
    }

    function guardarArchivo(Request $request)  {
        $path = "archivosInstructores";
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->storeAs($path, $filename, 'upload');

        $url = asset(url('/storage/' . $path, $filename));

        $archivo = new ArchivoInstructor();
        $archivo->rfc = $request->rfc;
        $archivo->nombreArchivo = $filename;
        $archivo->url = $url;
        $archivo->save();

        return response()->json([
            'message' => 'Archivo guardado correctamente',
            'rfc' => $request->rfc,
            'nombreArchivo' => $filename,
            'url' => $url
        ]);
    }

    
    function archivosInstructor($rfc){
        $archivos = ArchivoInstructor::where('rfc', $rfc)->get();
        return response()->json($archivos);
    }
}
