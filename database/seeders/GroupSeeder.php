<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('groups')->truncate();
        DB::table('groups')->insert([
            [
                'id' => 1,
                'name' => 'T2009M1',
                'ward_id' => '4',
                'type' => 'Quân đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 2,
                'name' => 'Đội 1',
                'ward_id' => '40',
                'type' => 'Sư đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 3,
                'name' => 'Đội 2',
                'ward_id' => '43',
                'type' => 'Lữ đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 4,
                'name' => 'Đội 3',
                'ward_id' => '55',
                'type' => 'Trung đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 5,
                'name' => 'Đội 4',
                'ward_id' => '64',
                'type' => 'Tiểu đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 6,
                'name' => 'Đội 5',
                'ward_id' => '67',
                'type' => 'Tiểu đại đội',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 7,
                'name' => 'Đội 6',
                'ward_id' => '76',
                'type' => 'Liên đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 8,
                'name' => 'Đội 7',
                'ward_id' => '167',
                'type' => 'Dân đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 9,
                'name' => 'Đội 8',
                'ward_id' => '172',
                'type' => 'Đại đội',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 10,
                'name' => 'Đội 9',
                'ward_id' => '199',
                'type' => 'Trung đội',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 11,
                'name' => 'Đội 10',
                'ward_id' => '235',
                'type' => 'Tiểu đội',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
        ]);
    }
}
