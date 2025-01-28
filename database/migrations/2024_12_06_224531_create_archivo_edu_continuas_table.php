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
        Schema::create('archivo_edu_continuas', function (Blueprint $table) {
            $table->unsignedBigInteger("idCursoEduContinua");
            $table->string("nombreArchivo");
            $table->string("url");

            $table->foreign("idCursoEduContinua")->references("id")->on("curso_edu_continuas");
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivo_edu_continuas');
    }
};
