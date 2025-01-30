<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File as RulesFile;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        // $reglas = ['required', RulesFile::types(['pdf'])->max(10000)];
        // $mensaje = ['file.required' => 'Debe subir un archivo'];

        // $validator = Validator::make($request->all(), $reglas, $mensaje);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'message' => 'Error al guardar el archivo'
        //     ]);
        // }

        $path = "archivosAcademicos/" . $request->noPersonal;
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->storeAs($path, $filename, 'upload');

        $url = asset(url('/storage/' . $path, $filename));

        $save = new File();
        $save->noPersonal = $request->noPersonal;
        $save->nombreArchivo = $filename;
        $save->url = $url;
        $save->save();

        return response()->json([
            'message' => 'Archivo guardado correctamente',
            'noPersonal' => $request->noPersonal,
            'nombreArchivo' => $filename,
            'url' => $url
        ]);
    }

    public function getArchivos(Request $request)
    {
        // $path = "archivos/" . $request->noPersonal;
        // $files = FacadesFile::get(storage_path('formato-registro-sesiones TR.pdf'));
    
        // // Construir la lista de URLs
        // $fileUrls = [];
        // // foreach ($files as $file) {
        // //     // Generar la URL para cada archivo
        // //     $url = Storage::url($file);
        // //     // Agregar la URL a la lista
        // //     $fileUrls[] = $url;
        // // }

        // // Devolver la lista de URLs
        // return $files;

        $archivos = File::where('noPersonal', $request->noPersonal)->get();
        return response()->json($archivos);
    }
}
