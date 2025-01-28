<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ParticipanteCursoEduContinua extends Pivot
{
    protected $table = 'participante_curso_edu_continuas';
    protected $fillable = ['idCurso','idParticipante', 'calificacion', 'tipoImg', 'comprobante' ];
    public $timestamps = false; 
}
