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
        Schema::create('files_profa', function (Blueprint $table) {
            $table->integer("idCurso");
            $table->string("nombreArchivo");
            $table->string("url");

            $table->foreign("idCurso")->references("idg_curso")->on("curso_profas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files_profa');
    }
};
