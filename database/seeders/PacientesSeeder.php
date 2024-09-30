<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;  

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=array([
            'Nombre'=>'denis',
            'Apellido'=>'baires',
            'Fecha_Nacimiento'=>'2000/09/09',
            'Genero'=>'Masculino',
            'Direccion'=>'san juan nonualco, colonia fatima, la paz',
            'Telefono'=>69593038,
            'Historial_Medico'=>'Hipertensión arterial: Juan ha sido diagnosticado con hipertensión arterial desde hace 5 años. Toma medicamentos recetados para controlarla.
                Diabetes tipo 2: También tiene diabetes tipo 2, diagnosticada hace 3 años. Sigue una dieta especial y toma medicamentos para mantener su nivel de azúcar en sangre bajo control.
                Medicamentos Actuales:
                Losartán: Para la hipertensión.
                Metformina: Para la diabetes.',
            'Correo_Electronico'=>'deniss@gmail.com',
            'created_at'=> Carbon::now()
        ],[
            'Nombre'=>'anival',
            'Apellido'=>'moran',
            'Fecha_Nacimiento'=>'2003/03/09',
            'Genero'=>'Masculino',
            'Direccion'=>'santiago nonualco, col. girasol, la paz',
            'Telefono'=>69593038,
            'Historial_Medico'=>'Enfermedades Crónicas: Hipertensión arterial (diagnosticada hace 5 años). Diabetes tipo 2 (diagnosticada hace 2 años).Alergias:
                    Alergia al polen. Alergia a los mariscos. Cirugías Previas: Apendicectomía (realizada en 2010). Medicamentos Actuales:
                    Metformina: 1000 mg al día para controlar la diabetes.
                    Losartán: 50 mg al día para la hipertensión.',
            'Correo_Electronico'=>'anivallll@gmail.com',
            'created_at'=> Carbon::now()
        ]);

        DB::table('pacientes')->insert($data);

        
        //
    }
}
