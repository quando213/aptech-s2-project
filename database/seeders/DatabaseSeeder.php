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
        $this->call([
            DistrictWardSeeder::class,
            CategorySeeder::class,
            ComboSeeder::class,
            GroupSeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
            OrderSeeder::class
        ]);
    }
}
