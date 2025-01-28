<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{

    protected $table = 'instructors';
    protected $primaryKey = 'rfc';

    protected $keyType = 'string';
    public $incrementing = 'false';
    public $timestamps = false;

    use HasFactory;

    public function cursoEduContinuas()
    {
        return $this->hasMany(CursoEduContinua::class, 'rfc', 'rfc');
    }
    

    public function cursosEduContinua()
    {
        return $this->belongsToMany(CursoEduContinua::class, 'academico_curso_edu_continuas', 'rfc', 'curso_edu_continuas_id')
            ->withPivot('rol');
    }
    
}
