<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;  

class MedicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=array([
            'Nombre'=>'sergio',
            'Especialidad'=>'Dermatologia',
            'Correo_Electronico'=>'sergioi@gmail.com',
            'Telefono'=>'76489498',
            'created_at'=>Carbon::now()
        ],[
            'Nombre'=>'david',
            'Especialidad'=>'Neurologia',
            'Correo_Electronico'=>'davidd@gmail.com',
            'Telefono'=>'73339498',
            'created_at'=>Carbon::now()
        ],[
            'Nombre'=>'lorena',
            'Especialidad'=>'Oftalmologia',
            'Correo_Electronico'=>'lore333@gmail.com',
            'Telefono'=>'72222298',
            'created_at'=>Carbon::now()
        ]);

        DB::table('medicos')->insert($data);
        //
    }
}
