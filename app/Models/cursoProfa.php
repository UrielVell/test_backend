<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cursoProfa extends Model
{
    use HasFactory;
    protected $table = 'curso_profas';
    protected $primaryKey = 'idg_curso';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idg_curso',
        'nombreCurso',
        'modalidad',
        'descripcion',
        'justificacion',
        'objetivoGeneral',
        'fechaInicio',
        'fechaFin',
        'horaInicio',
        'horaFin',
        'horasTeoricas',
        'horasPracticas',
        'valorCreditos',
        'fechaElaboracion',
        'fechaModificacion',
        'unidadCompetencia',
        'saberesTeoricos',
        'estado'
    ];



    public function academicos()
    {
        return $this->belongsToMany(Academico::class, 'academico_curso_profas', 'curso_profa_id', 'noPersonal')
            ->using(CursoProfaAcademico::class)
            ->withPivot('rol', 'calificacion');
    }
}
