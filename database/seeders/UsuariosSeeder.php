<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;  

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=array([
            'Nombre_Usuario'=>'sergio',
            'Contraseña'=>12345,
            'created_at'=>Carbon::now()
        ],[
            'Nombre_Usuario'=>'daniel',
            'Contraseña'=>54321,
            'created_at'=>Carbon::now()

        ]);
        DB::table('usuarios')->insert($data);
        //
    }
}
