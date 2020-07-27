<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
class Version_1_0_0_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@grupolambda.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);
    }
}
