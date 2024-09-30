<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;  

class ReportesClinicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=array([
            'Fecha_Generacion'=>'2023/02/10',
            'Contenido'=>'algun valor',
            'paciente'=>1,
            'created_at'=>Carbon::now()
        ],[
            'Fecha_Generacion'=>'2024/08/10',
            'Contenido'=>'algun valor',
            'paciente'=>2,
            'created_at'=>Carbon::now()
        ]);

        DB::table('reportes_clinico')->insert($data);

        
        //
    }
}
