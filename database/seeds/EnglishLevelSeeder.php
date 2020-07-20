<?php

use App\EnglishLevel;
use Illuminate\Database\Seeder;

class EnglishLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EnglishLevel::create(['level' => 'Basico', 'slug' => 'basic']);
        EnglishLevel::create(['level' => 'Intermedio', 'slug' => 'intermediate']);
        EnglishLevel::create(['level' => 'Avanzado', 'slug' => 'advanced']);
    }
}
