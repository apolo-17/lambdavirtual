<?php

use App\SchoolCycle;
use Illuminate\Database\Seeder;

class SchoolCycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchoolCycle::create(['name' => 'Primero', 'slug' => 'first']);
        SchoolCycle::create(['name' => 'Segundo', 'slug' => 'second']);
        SchoolCycle::create(['name' => 'Tercero', 'slug' => 'third']);
        SchoolCycle::create(['name' => 'Cuarto', 'slug' => 'fourth']);
        SchoolCycle::create(['name' => 'Quinto', 'slug' => 'fifth']);
        SchoolCycle::create(['name' => 'Sexto', 'slug' => 'sixth']);
        SchoolCycle::create(['name' => 'Séptimo', 'slug' => 'seventh']);
        SchoolCycle::create(['name' => 'Octavo', 'slug' => 'eighth']);
        SchoolCycle::create(['name' => 'Noveno', 'slug' => 'nineth']);
        SchoolCycle::create(['name' => 'Décimo', 'slug' => 'tenth']);
    }
}
