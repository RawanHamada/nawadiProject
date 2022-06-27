<?php

namespace Database\Seeders;
use App\Models\Club;
use App\Models\City;
// use Database\Seeders\DB;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('clubs')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        Club::create([
            'city_id' => 1,
            'club_name' => 'مدارس الصدارة',

        ]);

        // 'city_id' => City::get()->city_id,
          // foreach(City::get() -> $city){
            // 'city_id' => 1,
            // }

        // $this->club_name->insert([
        //     'club_name' => 'مدارس الصدارة'
        // ]);
        // DB::table('clubs')->truncate();

        // $this->name->insert([
        //     'name' => 'مدارس الصدارة'
        // ]);

    }
}
