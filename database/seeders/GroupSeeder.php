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
                'ward_id' => 'Khu vực Thanh Xuân',
                'type' => 'Quân đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 2,
                'name' => 'Đội 1',
                'ward_id' => 'Khu vực Mỹ Đình',
                'type' => 'Sư đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 3,
                'name' => 'Đội 2',
                'ward_id' => 'Khu vực Cầu Giấy',
                'type' => 'Lữ đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 4,
                'name' => 'Đội 3',
                'ward_id' => 'Khu vực Hai Bà Trưng',
                'type' => 'Trung đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 5,
                'name' => 'Đội 4',
                'ward_id' => 'Khu vực Hồ Hoàn Kiếm',
                'type' => 'Tiểu đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 6,
                'name' => 'Đội 5',
                'ward_id' => 'Khu vực Thanh Trì',
                'type' => 'Tiểu đại đội',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 7,
                'name' => 'Đội 6',
                'ward_id' => 'Khu vực Hà Đông',
                'type' => 'Liên đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 8,
                'name' => 'Đội 7',
                'ward_id' => 'Khu vực Long Biên',
                'type' => 'Dân đoàn',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 9,
                'name' => 'Đội 8',
                'ward_id' => 'Khu vực Tây Hồ',
                'type' => 'Đại đội',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 10,
                'name' => 'Đội 9',
                'ward_id' => 'Khu vực Hoàng Mai',
                'type' => 'Trung đội',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 11,
                'name' => 'Đội 10',
                'ward_id' => 'Khu vực Tây Mô',
                'type' => 'Tiểu đội',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
        ]);
    }
}
