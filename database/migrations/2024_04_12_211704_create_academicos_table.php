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
        Schema::create('academicos', function (Blueprint $table) {
            $table->integer('noPersonal')->primary();
            $table->string('nombre'); 
            $table->string('apellidoPaterno'); 
            $table->string('apellidoMaterno'); 
            $table->string('entidadAcademica');
            $table->string('genero');

            $table->string('telParticular')->nullable();  
            $table->string('telCelular')->nullable();
            $table->string('telOficina')->nullable();
            $table->string('email')->nullable();
            $table->string('tipoContratacion')->nullable();
            $table->string('categoriaContratacion')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('antiguedad')->nullable();
            $table->string('obraEscrita')->nullable();
            $table->string('cursosImpartidos')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academicos');
    }
};
