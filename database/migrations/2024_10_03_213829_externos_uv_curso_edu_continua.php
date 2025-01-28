<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('externos_uv_curso_edu_continua', function (Blueprint $table) {
            $table->string('rfc',13);
            $table->foreign('rfc')->references('rfc')->on('instructors');
            $table->unsignedBigInteger('idCurso');
            $table->foreign('idCurso')->references('id')->on('curso_edu_continuas');
            $table->string('rol');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
