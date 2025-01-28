<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{

    protected $table = 'participantes';
    public $timestamps = false;

    protected $appends = ["nombreCompleto"];

    public function getNombreCompletoAttribute()
    {
        return "{$this->nombre} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }

    public function cursos(){
        return $this->belongsToMany(CursoEduContinua::class, 'participante_curso_edu_continuas', 'idParticipante', 'idCurso')
        ->using(ParticipanteCursoEduContinua::class)
        ->withPivot('calificacion', 'comprobante');
    }

}
