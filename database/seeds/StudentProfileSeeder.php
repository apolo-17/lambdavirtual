<?php

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
        User::create([
            'name' => 'Apolinar Morales Añaqui',
            'email' => 'apolinar.morales.a@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('secret'),
        ]);
    }
}
