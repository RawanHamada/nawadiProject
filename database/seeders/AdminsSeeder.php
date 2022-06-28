<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();

        Admin::create([
            'name' => 'Ali',
            'email' => 'ali@gmail.com',
            'password' =>Hash::make('password'),
            'status' =>'active',
        ]);
    }
}
