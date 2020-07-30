<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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

        User::create([
            'name' => 'Christian Maticorena',
            'email' => 'eliottack@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('sims3'),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@grupolambda.com.pe',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);
    }
}
