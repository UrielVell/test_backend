<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivoInstructor extends Model
{
    public $timestamps = false;
    protected $table = 'archivo_instructors';
    use HasFactory;
}
