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
        Schema::create('curso_edu_continuas', function (Blueprint $table) {
            $table->id();
            $table->string('claveCurso', 10)->unique()->nullable();
            $table->string('nombreCurso');
            $table->string('modalidad');
            $table->boolean('estadoCurso');
            $table->string('tipo');
            $table->string('funcion');
            $table->string('region');
            $table->string('categoriaAtencion');
            $table->string('cicloEscolar');
            $table->string('areaAcademica');
            $table->string('entidadAcademica');
            $table->string('sede');
            $table->string('direccionSede');
            $table->string('telefonoSede');
            $table->string('ciudadSede');
            $table->double('cuotaInscripcion');
            $table->double('constancia');
            $table->double('cuotaRecuperacion');
            $table->integer('cupoMinimo');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->string('dirigido');
            $table->text('temario');
            $table->string('evaluacion');
            $table->string('horario');
            $table->integer('totalHoras');
            $table->integer('noSesiones');
            //presupuesto
            $table->double('honorariosPersonal');
            $table->double('beneficios');
            $table->double('montoMaterialInsumos');
            $table->double('apoyoAdministrativo');
            $table->double('egreso');
            $table->double('ingreso');
            $table->double('totalPresupuesto');

            $table->string('claveCA', 18);
            $table->foreign('claveCA')->references('claveCA')->on('cuerpo_academicos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso_edu_continuas');
    }
};
