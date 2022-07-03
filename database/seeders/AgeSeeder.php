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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('ages')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        Age::create([
            'age_group' =>  ' من أول حتى ثالث',
        ]);
        Age::create([
            'age_group' =>  'من رابع حتى سادس',
        ]);
        Age::create([
            'age_group' =>  'من أول متوسط حتى ثالث متوسط',
        ]);
        Age::create([
            'age_group' => 'من أول ثانوي  فأعلى'
    ]);

    }
}
