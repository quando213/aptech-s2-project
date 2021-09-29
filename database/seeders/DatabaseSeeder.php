<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $path = 'countries.sql';
        DB::unprepared(file_get_contents($path));
        $this->call([
            CategorySeeder::class,
            ComboSeeder::class,
            GroupSeeder::class,
            ProductSeeder::class,
            UserSeeder::class
        ]);


    }
}
