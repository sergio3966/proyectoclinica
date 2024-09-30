<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([  
            UsuariosSeeder::class,
            MedicosSeeder::class,
            PacientesSeeder::class,
            ReportesClinicoSeeder::class,
            CitasMedicaSeeder::class,
            RecordatoriosSeeder::class
            
        ]);
        // User::factory(10)->create();

        
    }
}
