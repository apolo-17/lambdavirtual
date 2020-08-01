<?php

use App\StudentProfile;
use App\University;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::isLocal()) {
            StudentProfile::create([
                'user_id' => '1',
                'name' => 'Añaqui',
                'last_name' => 'Apolinar Morales',
                'phone_number' => '579703259',
                'country_id' =>	'1',
                'department' =>	'12',
                'province' => 'Ciudad de México',
                'district' => 'paramount',
                'born_date' => '1994-08-14',
                'gender' =>	'M',
                'dni' => '54789656',
                'university_id' => '4',
                'school_cycle_id' => '10',
                'academic_degree_id' => '3',
                'english_level_id' => '1',
                'work' => 'si'
            ]);
        }
    }
}
