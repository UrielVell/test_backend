<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuerpoAcademico extends Model
{
    protected $primaryKey = 'claveCA';

    protected $keyType = 'string';
    public $incrementing = 'false';
    public $timestamps = false;
    protected $fillable = ['claveCA', 'nombreCA'];

    use HasFactory;

    public function cursoEduContinuas()
    {
        
        return $this->hasMany(CursoEduContinua::class, 'claveCA', 'claveCA');
    }
}
