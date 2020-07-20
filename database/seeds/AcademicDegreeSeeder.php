<?php

use App\AcademicDegree;
use Illuminate\Database\Seeder;

class AcademicDegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademicDegree::create(['name' => 'Soy estudiante', 'slug' => 'student']);
        AcademicDegree::create(['name' => 'Egresado', 'slug' => 'graduate']);
        AcademicDegree::create(['name' => 'Bachiller', 'slug' => 'bachiller']);
        AcademicDegree::create(['name' => 'Licenciado', 'slug' => 'licenciado']);
        AcademicDegree::create(['name' => 'Magíster', 'slug' => 'magister']);
        AcademicDegree::create(['name' => 'Doctorado', 'slug' => 'doctorado']);
    }
}
