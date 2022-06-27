<?php

namespace Database\Seeders;
use App\Models\Age;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class AgeSeeder extends Seeder
{
    // protected $age;

    // public function __construct(Age $age)
    // {
    //     $this->age = $age;
    // }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ages')->truncate();
        Age::create([
            'age_group' =>  'براعم من 7 سنوات الى 9 سنوات',
        ]);
        Age::create([
            'age_group' =>  'اشبال من 9 سنوات الى 12 سنة',
        ]);
        Age::create([
            'age_group' =>  'فتيان من 12 سنة الى 15 سنة',
        ]);
        Age::create([
            'age_group' => 'شباب من 16 سنة فأكثر'
    ]);

    }
}
