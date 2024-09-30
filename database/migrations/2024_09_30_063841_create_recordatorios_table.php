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
        Schema::create('recordatorios', function (Blueprint $table) {
            $table->id('ID_Recordatorio', 11);
            $table->dateTime('Fecha_Hora_Recordatorio');
            $table->enum('opciones', ['Correo', 'MensajeTexto']);
            $table->bigInteger('cita_medica')->unsigned();
            $table->foreign('cita_medica')->references('ID_Cita')->on('citas_medica');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recordatorios');
    }
};
