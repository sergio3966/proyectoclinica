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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('ID_Paciente', 11);
            $table->string('Nombre', 100);
            $table->string('Apellido', 100);
            $table->date('Fecha_Nacimiento');
            $table->enum('Genero', ['Masculino', 'Femenino']);
            $table->string('Direccion', 150);
            $table->string('Telefono', 20);
            $table->text('Historial_Medico');
            $table->string('Correo_Electronico', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
