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
                'thumbnail' => 'https://cf.shopee.vn/file/0a00a31519fd18e3fe054804afebd8a4',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 2,
                'name' => 'Đầu Thăn Bò Úc Pacow',
                'description' => 'Thịt bò nhập Khẩu',
                'sort_number' => 2,
                'thumbnail' => 'https://salt.tikicdn.com/cache/280x280/ts/product/a2/1c/31/5f432211163f08235507904b7c210056.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 3,
                'name' => 'Nộm sứa Tĩnh Gia Nhật Minh',
                'description' => 'Sứa tươi đóng túi',
                'sort_number' => 3,
                'thumbnail' => 'https://salt.tikicdn.com/cache/w1200/ts/product/12/f2/57/7f71c492a34db98fae040be5bfeb4969.png',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 4,
                'name' => 'Rau cải ngọt',
                'description' => 'Rau sạch 100%',
                'sort_number' => 4,
                'thumbnail' => 'https://hatgiongdalat.com/asset/upload/image/cai-ngot-huu-co.jpg?v=20190410',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 5,
                'name' => 'Mì tương đen Ottogi Bắc Kinh',
                'description' => 'Bột mì, bột khoai tây, dầu cọ, muối, canxi, bột tương đen, đường, hành, bắp cải, cà rốt, bột nước tương, bột bắp biến tính, glucose, chiết xuất bò, dầu hạt nho, muối, chiết xuất nấm men, bột tỏi',
                'sort_number' => 5,
                'thumbnail' => 'https://bizweb.dktcdn.net/thumb/1024x1024/100/239/618/products/645175550099.jpg?v=1503920040867',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 6,
                'name' => 'Gạo giống Nhật Bảo Minh',
                'description' => 'Gạo giống Nhật',
                'sort_number' => 6,
                'thumbnail' => 'https://product.hstatic.net/1000126467/product/gao_giong_nhat_5kg_bao_minh_94bf3e72103d448c8ebe81ad7b720859_master.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 7,
                'name' => 'Mì gói ăn liền khoai tây vị xốt bò hầm Omachi',
                'description' => 'Bột mì, dầu thực vật, tinh bột khoai mì, muối, tinh bột khoai tây (20g/kg), muối, nước mắm, chất tạo xốp (451i, 452i, 500i, 500ii), chất làm dầy (412), chất điều vị (621, 635), chiết xuất nấm men, bột lòng đỏ trứng (830mg/kg), màu thực phẩm (100i)...',
                'sort_number' => 7,
                'thumbnail' => 'https://sieuthifptmart.jweb.vn/uploads/sieuthifptmart/images/74437a71fa55e220a489a9d24d7b58ce.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 8,
                'name' => 'Nước tương Đậm đặc Maggi',
                'description' => 'Nước, muối, chiết xuất đậu nành lên men tự nhiên 85g (đậu nành - soya, lúa mì - wheat, muối), đường, chất điều vị 621, màu tổng hợp 150c, chất điều chỉnh độ chua 260, chất ổn định 415, chất bảo quản 202, chất điều vị (631, 627), hương nước tương tổng hợp',
                'sort_number' => 8,
                'thumbnail' => 'https://csfood.vn/wp-content/uploads/2018/01/n%C6%B0%E1%BB%9Bc-t%C6%B0%C6%A1ng-%C4%91%E1%BA%ADu-n%C3%A0nh-%C4%91%E1%BA%ADm-%C4%91%E1%BA%B7c-maggi-700ml.png',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 9,
                'name' => 'Ngũ cốc dinh dưỡng Froot Loops Kelloggs',
                'description' => 'Ngũ cốc dinh dưỡng',
                'sort_number' => 9,
                'thumbnail' => 'https://cf.shopee.vn/file/1b58f99b2de394677417c079d6ec0224',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 10,
                'name' => 'Sữa chua uống men sống Vinamilk Probi hương việt quất',
                'description' => 'Sữa chua men tiêu hóa tốt cho đường ruột',
                'sort_number' => 10,
                'thumbnail' => 'https://vinamilkvietnam.com/wp-content/uploads/2019/06/S%E1%BB%AEA-CHUA-U%E1%BB%90NG-PROBI-VI%E1%BB%86T-QU%E1%BA%A4T-L%E1%BB%90C-4-CHAI-X-130ML.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
        ]);
    }
}
