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
        Schema::create('archivo_instructors', function (Blueprint $table) {
            $table->string("rfc");
            $table->string("nombreArchivo");
            $table->string("url");

            $table->foreign("rfc")->references("rfc")->on("instructors");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivo_instructors');
    }
};
