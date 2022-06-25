<?php

namespace Database\Seeders;
use App\Models\Club;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    // name of club
    // protected $name;

    // // name of city
    // protected $city_name;

    // public function __construct(Club $name , Club $city_name)
    // {
    //     $this->name = $name;
    //     $this->city_name = $city_name;
    // }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('clubs')->truncate();
        Club::create([
            'name' => 'مدارس الصدارة',
            'city_name' => 'الرياض',
        ]);
        // $this->name->insert([
        //     'name' => 'مدارس الصدارة'
        // ]);

    }
}
