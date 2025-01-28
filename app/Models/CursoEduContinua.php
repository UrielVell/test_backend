<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoEduContinua extends Model
{
    use HasFactory;

    protected $fillable = [
        'claveCurso',
        'nombreCurso', 
        'modalidad', 
        'estadoCurso',
        'tipo', 
        'funcion', 
        'region', 
        'categoriaAtencion', 
        'cicloEscolar',
        'areaAcademica',
        'entidadAcademica',
        'sede',
        'direccionSede',
        'telefonoSede',
        'ciudadSede',
        'cuotaInscripcion', 
        'constancia',
        'cuotaRecuperacion', 
        'cupoMinimo',
        'fechaInicio', 
        'fechaFin', 
        'dirigido', 
        'temario', 
        'evaluacion',
        'horario', 
        'totalHoras',
        'noSesiones', 
        'honorariosPersonal',
        'beneficios',
        'montoMaterialesInsumos',
        'apoyoAdministrativo',
        'egreso',
        'ingreso', 
        'totalPresupuesto', 
        'claveCA'
        
    ];

    public function cuerpoAcademico()
    {
        return $this->belongsTo(CuerpoAcademico::class, 'claveCA', 'claveCA');
    }

    public function academicos(){
        return $this->belongsToMany(Academico::class, 'academico_curso_edu_continuas','idCurso','noPersonal' )->withPivot('rol', 'calificacion', 'comprobante');
    }

    public function externos()
    {
        return $this->belongsToMany(Instructor::class, 'externos_uv_curso_edu_continua', 'idCurso', 'rfc')->withPivot('rol');
    }

    public function participantes(){
        return $this->belongsToMany(Participante::class, 'participante_curso_edu_continuas', 'idCurso', 'idParticipante')
        ->using(ParticipanteCursoEduContinua::class)
        ->withPivot('calificacion' , 'comprobante');
    }

}
