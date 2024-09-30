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
        Schema::create('reportes_clinico', function (Blueprint $table) {
            $table->id('ID_Reporte', 11);
            $table->date('Fecha_Generacion');
            $table->binary('Contenido');
            $table->bigInteger('paciente')->unsigned();
            $table->foreign('paciente')->references('ID_Paciente')->on('pacientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes_clinico');
    }
};
