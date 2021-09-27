<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'id' => 1,
                'first_name' => 'admin',
                'last_name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'district_id' => 19,
                'ward_id' => 626,
                'street' => '8 Tôn Thất Thuyết',
                'phone' => '0912345678',
                'role' => UserRole::Admin,
                'group_id' => null,
                'position' => null,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 2,
                'first_name' => 'Thuận',
                'last_name' => 'Nguyễn Ngọc',
                'email' => 'thuan@gmail.com',
                'password' => Hash::make('123456'),
                'district_id' => 19,
                'ward_id' => 626,
                'street' => '8 Tôn Thất Thuyết',
                'phone' => '0912345678',
                'role' => UserRole::User,
                'group_id' => null,
                'position' => null,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 3,
                'first_name' => 'Mỹ Đình 2',
                'last_name' => 'Shipper',
                'email' => 'shipper3@gmail.com',
                'password' => Hash::make('123456'),
                'district_id' => 5,
                'ward_id' => 626,
                'street' => '8 Tôn Thất Thuyết',
                'phone' => '0912345678',
                'role' => UserRole::User,
                'group_id' => 1,
                'position' => 'Đội trưởng',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ]
        ]);
    }
}
