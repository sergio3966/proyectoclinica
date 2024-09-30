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
        Schema::create('citas_medica', function (Blueprint $table) {
            $table->id('ID_Cita', 11);
            $table->dateTime('Fecha_Hora_Recordatorio');
            $table->string('Motivo', 200);
            $table->bigInteger('paciente')->unsigned();
            $table->foreign('paciente')->references('ID_Paciente')->on('pacientes');
            $table->bigInteger('medico')->unsigned();
            $table->foreign('medico')->references('ID_Medico')->on('medicos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas_medica');
    }
};
