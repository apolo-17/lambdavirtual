<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create(['name' => 'Argentina', 'slug' => 'argentina']);
        Country::create(['name' => 'Bolivia', 'slug' => 'bolivia']);
        Country::create(['name' => 'Ecuador', 'slug' => 'ecuador']);
        Country::create(['name' => 'Perú', 'slug' => 'peru']);
    }
}
