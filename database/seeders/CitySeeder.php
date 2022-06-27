<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\City;
// use Database\Seeders\DB;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    // // name of city
    // protected $city_name;

    // public function __construct(City $city_name)
    // {
    //     $this->city_name = $city_name;
    // }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('cities')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        City::create([
            'city_name' => 'الرياض',
        ]);



    }
}
