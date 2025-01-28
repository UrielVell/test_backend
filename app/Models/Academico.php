<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Cursor;

class Academico extends Model
{
    use HasFactory;
    protected $table = 'academicos';
    protected $primaryKey = 'noPersonal';
    public $incrementing = false;
    public $timestamps = false;

    protected $appends = ["nombreCompleto"];

    public function getNombreCompletoAttribute()
    {
        return "{$this->nombre} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }

    protected $fillable = [
        'noPersonal',
        'nombreCompleto',
        'entidadAcademica',
        'genero',
        'telParticular',
        'telCelular',
        'telOficina',
        'email',
        'tipoContratacion',
        'categoriaContratacion',
        'domicilio',
        'antiguedad',
        'estudios',
        'obraEscrita',
        'cursosImpartidos'
    ];
    

    public function cursos(){
        return $this->belongsToMany(cursoProfa::class, 'academico_curso_profas', 'noPersonal','curso_profa_id' )
        ->using(CursoProfaAcademico::class)
        ->withPivot('rol', 'calificacion');
    }

    public function cursosEduContinua(){
        return $this->belongsToMany(CursoEduContinua::class, 'academico_curso_edu_continuas', 'noPersonal','idCurso' )
        // ->using(::class) poner el modelo pivot de la relacion
        ->withPivot('rol', 'calificacion');
    }


    public function archivos(){
        return $this->hasMany(File::class,'noPersonal', 'noPersonal');
    }

}


