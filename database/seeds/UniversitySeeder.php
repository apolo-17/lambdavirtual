<?php

use App\University;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        University::create(['name' => 'Universidad Nacional Mayor de San Marcos', 'slug' => 'universidad_nacional_mayor_de_SanMarcos']);
        University::create(['name' => 'Universidad Nacional Federico Villareal', 'slug' => 'universidad_nacional_federico_villareal']);
        University::create(['name' => 'Universidad Nacional de Ingeniería', 'slug' => 'universidad_nacional_de_ingenieria']);
        University::create(['name' => 'Universidad Nacional del Callao', 'slug' => 'universidad_nacional_del_callao']);
        University::create(['name' => 'Universidad Agraria La Molina', 'slug' => 'universidad_agraria_LaMolina']);
        University::create(['name' => 'Pontificia Universidad Católica del Perú', 'slug' => 'pontificia_universidad_católica_del_peru']);
        University::create(['name' => 'ESAN', 'slug' => 'ESAN']);
        University::create(['name' => 'Universidad del Pacífico', 'slug' => 'universidad_del_pacifico']);
        University::create(['name' => 'Universidad Peruana de Ciencias Aplicadas', 'slug' => 'universidad_peruana_de_ciencias_aplicadas']);
        University::create(['name' => 'Universidad Nacional del Centro del Perú', 'slug' => 'universidad_nacional_del_centro_del_peru']);
        University::create(['name' => 'Universidad Nacional de San Agustin de Arequipa', 'slug' => 'universidad_nacional_de_SanAgustin_de_arequipa']);
    }
}
