<?php

namespace App\Http\Controllers;

use App\Models\cursoProfa;
use App\Models\FileProfa;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class FileProfaController extends Controller
{
    public function upload (Request $request) {

        
        $path = "reportes/" . $request->idCurso;
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->storeAs($path, $filename, 'upload');

        $url = asset(url('/storage/' . $path, $filename));

        $save = new FileProfa();
        $save->idCurso = $request->idCurso;
        $save->nombreArchivo = $filename;
        $save->url = $url;
        $save->save();

        return response()->json([
            'message' => 'Archivo guardado correctamente',
            'idCurso' => $request->idCurso,
            'nombreArchivo' => $filename,
            'url' => $url
        ]);
    }

    public function getArchivos (Request $request){
        $archivos = FileProfa::where('idCurso', $request->idCurso)->get();
        return response()->json($archivos);
    }

    public function listaParticipantes ($id){
        // $dompdf = new Dompdf();

        // $path = ('app/views/listaParticipantesProfa.html');
        // $dompdf->loadHtmlFile($path);
        // $dompdf->render();

        // return $dompdf->stream();
        $cursoProfa = cursoProfa::findOrFail($id);
        $academicos = $cursoProfa->academicos;
        $pdf = Pdf::loadView('lista3', $cursoProfa->toArray());
        $pdf->setPaper('a4', 'landscape');
        return $pdf->download('listaProfa.pdf'); 
    }

}
