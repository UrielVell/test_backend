<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CursoProfaAcademico extends Pivot
{
    protected $table = 'academico_curso_profas';
    protected $fillable = ['curso_profa_id','noPersonal', 'rol', 'calificacion'];
    public $timestamps = true; 
}
