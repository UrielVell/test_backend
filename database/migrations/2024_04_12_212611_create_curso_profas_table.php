<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('curso_profas', function (Blueprint $table) {
            $table->integer('idg_curso')->primary();
            $table->string('nombreCurso');
            $table->string('modalidad');
            $table->string('descripcion');
            $table->string('justificacion');
            $table->string('objetivoGeneral');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->integer('horasTeoricas');
            $table->integer('horasPracticas');
            $table->integer('valorCreditos');
            $table->date('fechaElaboracion');
            $table->date('fechaModificacion');
            $table->string('unidadCompetencia');
            $table->string('saberesTeoricos');
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso_profas');
    }
};
