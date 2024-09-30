<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;  

class RecordatoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=array([
            'Fecha_Hora_Recordatorio'=>'2024-09-30 14:30:00',
            'opciones'=>'Correo',
            'cita_medica'=>1,
            'created_at'=>Carbon::now()
        ]);
        DB::table('recordatorios')->insert($data);
        //
    }
}
