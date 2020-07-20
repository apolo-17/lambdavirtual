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
        EnglishLevel::create(['name' => 'Basico', 'slug' => 'basic']);
        EnglishLevel::create(['name' => 'Intermedio', 'slug' => 'intermediate']);
        EnglishLevel::create(['name' => 'Avanzado', 'slug' => 'advanced']);
    }
}
