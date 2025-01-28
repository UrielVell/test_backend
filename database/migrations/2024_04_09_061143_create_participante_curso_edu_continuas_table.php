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
        Schema::create('participante_curso_edu_continuas', function (Blueprint $table) {
            $table->unsignedBigInteger('idParticipante');
            $table->foreign('idParticipante')->references('id')->on('participantes');
            $table->unsignedBigInteger('idCurso');
            $table->foreign('idCurso')->references('id')->on('curso_edu_continuas');
            $table->integer('calificacion')->nullable();
            $table->string('comprobante')->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participante__curso_edu_continuas');
    }
};
