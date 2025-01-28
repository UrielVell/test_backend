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
        Schema::create('academico_curso_profas', function (Blueprint $table) {
            $table->integer('noPersonal');
            $table->foreign('noPersonal')->references('noPersonal')->on('academicos')->onDelete('cascade');
            $table->integer('curso_profa_id');
            $table->foreign('curso_profa_id')->references('idg_curso')->on('curso_profas')->onDelete('cascade');
            $table->string('rol');
            $table->integer('calificacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academico_curso_profas');
    }
};
