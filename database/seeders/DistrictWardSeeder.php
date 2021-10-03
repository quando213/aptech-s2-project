<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictWardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->truncate();
        DB::table('wards')->truncate();
        $path = './database/seeders/countries.sql';
        DB::unprepared(file_get_contents($path));
    }
}
