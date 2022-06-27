<?php

namespace Database\Seeders;
use App\Models\City;
use App\Models\Club;
use App\Models\Age;
use Illuminate\Support\Facades\DB;
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
        $this->call([
            CitySeeder::class,
            ClubSeeder::class,
            AgeSeeder::class,

        ]);

        // \App\Models\User::factory(10)->create();
    }
}
