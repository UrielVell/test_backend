<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivoEduContinua extends Model
{
    public $timestamps = false;
    protected $table = 'archivo_edu_continuas';
    use HasFactory;
}
