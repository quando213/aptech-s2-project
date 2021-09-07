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
                'id'=>1,
                'first_name'=>'Quynh',
                'last_name'=>'Anh',
                'email'=>'quynhanh04062002@gmail.com',
                'password'=>Hash::make('123456'),
                'district_id'=>1,
                'ward_id'=>1,
                'street'=>'Ton That Thuyet',
                'phone'=>'0342236359',
                'group_id'=>1,
                'role'=>UserRole::Admin,
                'position'=>'admin',
                'created_at' => Carbon::now()->addDays(-1),
            ],[
                'id'=>2,
                'first_name'=>'Duong',
                'last_name'=>'Chinh',
                'email'=>'chinhdtth2009021@fpt.edu.vn',
                'password'=>Hash::make('123456'),
                'district_id'=>2,
                'ward_id'=>2,
                'street'=>'My Dinh',
                'phone'=>'0343803866',
                'group_id'=>1,
                'role'=>UserRole::Admin,
                'position'=>'admin',
                'created_at' => Carbon::now()->addDays(-1),
            ],[
                'id'=>3,
                'first_name'=>'Do',
                'last_name'=>'Quan',
                'email'=>'quanddth2009043@fpt.edu.vn',
                'password'=>Hash::make('123456'),
                'district_id'=>1,
                'ward_id'=>1,
                'street'=>'Ton That Thuyet',
                'phone'=>'0936069968',
                'group_id'=>'1',
                'role'=>UserRole::Admin,
                'position'=>'admin',
                'created_at' => Carbon::now()->addDays(-1),
            ],[
                'id'=>4,
                'first_name'=>'Nguyen',
                'last_name'=>'Thuan',
                'email'=>'thuanvshiep@gmail.com',
                'password'=>Hash::make('123456'),
                'district_id'=>1,
                'ward_id'=>1,
                'street'=>'Ton That Thuyet',
                'phone'=>'0929427881',
                'group_id'=>'1',
                'role'=>UserRole::Admin,
                'position'=>'admin',
                'created_at' => Carbon::now()->addDays(-1),
            ],[
                'id'=>5,
                'first_name'=>'Bui',
                'last_name'=>'Hoang',
                'email'=>'angtergamingx@gmail.com',
                'password'=>Hash::make('123456'),
                'district_id'=>1,
                'ward_id'=>1,
                'street'=>'Ton That Thuyet',
                'phone'=>' 0976812632',
                'group_id'=>'1',
                'role'=>UserRole::Admin,
                'position'=>'admin',
                'created_at' => Carbon::now()->addDays(-1),
            ],[
                'id'=>6,
                'first_name'=>'Bao',
                'last_name'=>'Anh',
                'email'=>'baoanh456@gmail.com',
                'password'=>Hash::make('123456'),
                'district_id'=>2,
                'ward_id'=>2,
                'street'=>'Hoang Mai',
                'phone'=>'0125548855',
                'group_id'=>'1',
                'role'=>UserRole::User,
                'position'=>'nguoi dung',
                'created_at' => Carbon::now()->addDays(-1),
            ],[
                'id'=>7,
                'first_name'=>'Minh',
                'last_name'=>'Anh',
                'email'=>'minhanh123@gmail.com',
                'password'=>Hash::make('123456'),
                'district_id'=>2,
                'ward_id'=>2,
                'street'=>'Hoang Mai',
                'phone'=>'0125548855',
                'group_id'=>'2',
                'role'=>UserRole::User,
                'position'=>'nguoi dung',
                'created_at' => Carbon::now()->addDays(-1),
            ],[
                'id'=>8,
                'first_name'=>'Nguyen',
                'last_name'=>'Huong',
                'email'=>'nguyenhuong202@gmail.com',
                'password'=>Hash::make('123456'),
                'district_id'=>6,
                'ward_id'=>6,
                'street'=>'Giap Bat',
                'phone'=>'0125548855',
                'group_id'=>3,
                'role'=>UserRole::User,
                'position'=>'nguoi dung',
                'created_at' => Carbon::now()->addDays(-1),
            ],[
                'id'=>9,
                'first_name'=>'Tran',
                'last_name'=>'Huyen',
                'email'=>'tranhuyen123@gmail.com',
                'password'=>Hash::make('123456'),
                'district_id'=>5,
                'ward_id'=>5,
                'street'=>'Thanh Tri',
                'phone'=>'0125548855',
                'group_id'=>2,
                'role'=>UserRole::Shipper,
                'position'=>'shipper',
                'created_at' => Carbon::now()->addDays(-1),
            ],[
                'id'=>10,
                'first_name'=>'Duong',
                'last_name'=>'Binh',
                'email'=>'duongbinh205@gmail.com',
                'password'=>Hash::make('123456'),
                'district_id'=>7,
                'ward_id'=>7,
                'street'=>'Dong Anh',
                'phone'=>'025747863',
                'group_id'=>3,
                'role'=>UserRole::Shipper,
                'position'=>'shipper',
                'created_at' => Carbon::now()->addDays(-1),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
