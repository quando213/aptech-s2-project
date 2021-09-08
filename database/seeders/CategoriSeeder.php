<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Xúc xích Winner CP',
                'description' => 'Thịt gà, thịt heo, mỡ heo, tinh bột, đường kính, hành, tiêu, tỏi...',
                'sort_number' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 2,
                'name' => 'Đầu Thăn Bò Úc Pacow',
                'description' => 'Thịt bò nhập Khẩu',
                'sort_number' => 2,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 3,
                'name' => 'Nộm sứa Tĩnh Gia Nhật Minh',
                'description' => 'Sứa tươi đóng túi',
                'sort_number' => 3,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 4,
                'name' => 'Rau cải ngọt',
                'description' => 'Rau sạch 100%',
                'sort_number' => 4,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 5,
                'name' => 'Mì tương đen Ottogi Bắc Kinh',
                'description' => 'Bột mì, bột khoai tây, dầu cọ, muối, canxi, bột tương đen, đường, hành, bắp cải, cà rốt, bột nước tương, bột bắp biến tính, glucose, chiết xuất bò, dầu hạt nho, muối, chiết xuất nấm men, bột tỏi',
                'sort_number' => 5,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 6,
                'name' => 'Gạo giống Nhật Bảo Minh',
                'description' => 'Gạo giống Nhật',
                'sort_number' => 6,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 7,
                'name' => 'Mì gói ăn liền khoai tây vị xốt bò hầm Omachi',
                'description' => 'Bột mì, dầu thực vật, tinh bột khoai mì, muối, tinh bột khoai tây (20g/kg), muối, nước mắm, chất tạo xốp (451i, 452i, 500i, 500ii), chất làm dầy (412), chất điều vị (621, 635), chiết xuất nấm men, bột lòng đỏ trứng (830mg/kg), màu thực phẩm (100i)...',
                'sort_number' => 7,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 8,
                'name' => 'Nước tương Đậm đặc Maggi',
                'description' => 'Nước, muối, chiết xuất đậu nành lên men tự nhiên 85g (đậu nành - soya, lúa mì - wheat, muối), đường, chất điều vị 621, màu tổng hợp 150c, chất điều chỉnh độ chua 260, chất ổn định 415, chất bảo quản 202, chất điều vị (631, 627), hương nước tương tổng hợp',
                'sort_number' => 8,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 9,
                'name' => 'Ngũ cốc dinh dưỡng Froot Loops Kelloggs',
                'description' => 'Ngũ cốc dinh dưỡng',
                'sort_number' => 9,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 10,
                'name' => 'Sữa chua uống men sống Vinamilk Probi hương việt quất',
                'description' => 'Sữa chua men tiêu hóa tốt cho đường ruột',
                'sort_number' => 10,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
        ]);
    }
}
