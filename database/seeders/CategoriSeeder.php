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
                'thumbnail' => 'https://vn-live-03.slatic.net/p/2ba322a39dc26a3abcf650e976bf323d.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 2,
                'name' => 'Đầu Thăn Bò Úc Pacow',
                'description' => 'Thịt bò nhập Khẩu',
                'sort_number' => 2,
                'thumbnail' => 'https://salt.tikicdn.com/ts/product/09/9d/60/9ea00c0150fd6c3b678af04f2938ae32.png',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 3,
                'name' => 'Nộm sứa Tĩnh Gia ',
                'description' => 'Sứa tươi đóng túi',
                'sort_number' => 3,
                'thumbnail' => 'https://st.app1h.com/uploads/company67/2019/09/08/5d74ae6b70b31.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 4,
                'name' => 'Rau cải ngọt',
                'description' => 'Rau sạch 100%',
                'sort_number' => 4,
                'thumbnail' => 'https://tancang-catering.com.vn/wp-content/uploads/2020/09/Ca%CC%89i-ngo%CC%A3t-800x800.png',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 5,
                'name' => 'Mì tương đen Ottogi',
                'description' => 'Bột mì, bột khoai tây, dầu cọ, muối, canxi, bột tương đen, đường, hành, bắp cải, cà rốt, bột nước tương, bột bắp biến tính, glucose, chiết xuất bò, dầu hạt nho, muối, chiết xuất nấm men, bột tỏi',
                'sort_number' => 5,
                'thumbnail' => 'https://cdn.tgdd.vn/Products/Images/2565/200040/bhx/mi-ottogi-tuong-den-bac-kinh-goi-135g-201904171620408364.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 6,
                'name' => 'Gạo giống Nhật',
                'description' => 'Gạo giống Nhật',
                'sort_number' => 6,
                'thumbnail' => 'https://product.hstatic.net/1000126467/product/01187021_f5896c8fa5084f95881a4ddf4448e1ad_859174f1058d4d4282e79fb1be904c93_grande.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 7,
                'name' => 'Mì gói Omachi',
                'description' => 'Bột mì, dầu thực vật, tinh bột khoai mì, muối, tinh bột khoai tây (20g/kg), muối, nước mắm, chất tạo xốp (451i, 452i, 500i, 500ii), chất làm dầy (412), chất điều vị (621, 635), chiết xuất nấm men, bột lòng đỏ trứng (830mg/kg), màu thực phẩm (100i)...',
                'sort_number' => 7,
                'thumbnail' => 'https://product.hstatic.net/1000148058/product/upload_bd7eae61c7ca4c28a466b81c095ffa27.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 8,
                'name' => 'Nước tương Maggi',
                'description' => 'Nước, muối, chiết xuất đậu nành lên men tự nhiên 85g (đậu nành - soya, lúa mì - wheat, muối), đường, chất điều vị 621, màu tổng hợp 150c, chất điều chỉnh độ chua 260, chất ổn định 415, chất bảo quản 202, chất điều vị (631, 627), hương nước tương tổng hợp',
                'sort_number' => 8,
                'thumbnail' => 'https://cdn.tgdd.vn/Products/Images/2683/76548/bhx/nuoc-tuong-maggi-dam-dac-chai-700ml-201904011447294437.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 9,
                'name' => 'Ngũ cốc Froot Loops Kelloggs',
                'description' => 'Ngũ cốc dinh dưỡng',
                'sort_number' => 9,
                'thumbnail' => 'https://cdn.tgdd.vn/Products/Images/2903/184803/bhx/ngu-coc-dinh-duong-kelloggs-hop-300g-2-700x467.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 10,
                'name' => 'Sữa chua Vinamilk Probi',
                'description' => 'Sữa chua men tiêu hóa tốt cho đường ruột',
                'sort_number' => 10,
                'thumbnail' => 'https://storage.googleapis.com/mm-online-bucket/ecommerce-website/uploads/media/312500.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
        ]);
    }
}
