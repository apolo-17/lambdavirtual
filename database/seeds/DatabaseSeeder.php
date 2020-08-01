<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AcademicDegreeSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(EnglishLevelSeeder::class);
        $this->call(SchoolCycleSeeder::class);
        $this->call(UniversitySeeder::class);
        $this->call(ExamsSeeder::class);
        $this->call(StudentProfileSeeder::class);
        //$this->call(PermissionsTableSeeder::class);
        //Only exist in Master branch
        //$this->call(Version_1_0_0_Seeder::class);
    }
}
