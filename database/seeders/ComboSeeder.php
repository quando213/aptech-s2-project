<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComboSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('combos')->truncate();
        DB::table('combos')->insert([
            [
                'id'=>1,
                'name'=>'Combo thực phẩm cho 1 ngày cho 4 người',
                'description'=>'500 gram Bí xanh, Thịt Bò 500 gram, Cá 500 gram, Rau Ngót 1 bó, cần Tây 200 gram, Trứng 4 quả',
                'day' => 1,
                'thumbnail' => 'https://bioplanet.vn/wp-content/uploads/2021/01/Combo-tet.png',
                'created_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id'=>2,
                'name'=>'Combo thực phẩm cho 1 ngày cho  4 người',
                'description'=>'Rau cải 500 gram, Tôm 500 gram, Thịt ba chỉ heo 500 gram, ớt chuông 2 quả, Rau Muống 1 bó, Bắp 4 trái',
                'day' => 1,
                'thumbnail' => 'https://freshfoodbox.vn/wp-content/uploads/2021/05/box-rau-cu-trai-cay-10-mon-dung-trong-3-ngay-foodbox-1a-scaled.jpg',
                'created_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id'=>3,
                'name'=>'Combo thực phẩm cho 1 ngày cho  4 người',
                'description'=>'Cà Chua 200 gram, Bầu 1 quả,  Tôm 500 gram, thịt Gà 1/2 con 700 gram,  Đậu phụ 3 cái, Trứng 3 quả, Khoai Lang 500 gram',
                'day' => 1,
                'thumbnail' => 'https://freshfoodbox.vn/wp-content/uploads/2021/05/box-rau-cu-trai-cay-10-mon-dung-trong-3-ngay-foodbox-1a-scaled.jpg',
                'created_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id'=>4,
                'name'=>'Combo thực phẩm cho 3 ngày cho 4 người',
                'description'=>'Rau bắp cải trắng 1kg,  Thịt ba chỉ heo 1kg, Bí Đỏ 1kg, Xương sườn heo 700 gram,  Rau Ngót 2 bó, Rau Muống 2 bó, Tôm 500 gram, Trứng 10 quả',
                'day' => 3,
                'thumbnail' => 'https://farm49.com/wp-content/uploads/2021/08/rau-cu-qua-combo-1.jpg',
                'created_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id'=>5,
                'name'=>'Combo thực phẩm cho 3 ngày cho 4 người',
                'description'=>'Bắp 4 chiếc, 1 con gà 1,5 kg, Thịt ba chỉ heo 700gram, Tôm 500gram, Khoai Tây 700 gram,  Rau Ngót 1 bó, Rau Muống 2 bó, ',
                'day' => 3,
                'thumbnai' => 'https://product.hstatic.net/1000400508/product/combo-thit-trung_4e8f020009d746d386ae042a20d91c39_grande.jpg',
                'created_at' => Carbon::now()->addDays(-1),
            ],  [
                'id'=>6,
                'name'=>'Combo thực phẩm cho 3 ngày cho 4 người',
                'description'=>'Bí xanh 1 quả 1,5kg, Thịt Vịt 1 con 1,5kg, Măng chua 800 gram,  1 kg thịt heo, 10 trứng, Rau Ngót 1 bó, Mực 500gram',
                'day' => 3,
                'thumbnail' => 'https://dalatfoodie.com/wp-content/uploads/2019/03/5c3c65dd5343b11de852-e1596705591667.jpg',
                'created_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id'=>7,
                'name'=>'Combo thực phẩm cho 7 ngày cho 4 người ',
                'description'=>'Mướp hương 1kg , cá 1,2kg , Thịt ba chỉ heo 1kg, Cà rốt 800gram, Cần tây 500gram, Rau Muống 4 bó, Tôm 500 gram, bầu 4 quả 800gram, Rau ngót 3 bó, Đậu phụ 4 cái, trứng 15 quả',
                'day' => 7,
                'thumbnail' => 'https://dalatfoodie.com/wp-content/uploads/2019/03/6d4c256f13f1f1afa8e0-e1596705619653.jpg',
                'created_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id'=>8,
                'name'=>'Combo thực phẩm cho 5 ngày cho 4 người',
                'description'=>'Bí Xanh 1,5kg, Thịt heo 2kg, Bí Đỏ 1kg, Xương Sườn 1,5 kg, Thịt gà 1 con 1,7kg, Rau cải 1kg, Khổ qua 1kg, trứng 20 quả, rau muống 2 bó',
                'day' => 7,
                'thumbnail' => 'https://bioplanet.vn/wp-content/uploads/2021/01/Combo-tet.png',
                'created_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id'=>9,
                'name'=>'Combo thực phẩm cho 6 ngày cho 4 người',
                'description'=>'cà Chua 1kg, cua đồng 500gram, rau đây 2 bó, Thịt heo 1,5 kg, Thịt Bò 800gram, Dưa chuột 2kg, khoai lang 1kg, Đậu Cô ve 1kg, ',
                'day' => 7,
                'thumbnail' => 'https://dalatfoodie.com/wp-content/uploads/2019/03/5c3c65dd5343b11de852-e1596705591667.jpg',
                'created_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id'=>10,
                'name'=>'Combo thực phẩm cho 1 ngày cho 4 người',
                'description'=>'Rau muống 1 bó , Thịt Hep 500 gram, Tôm 500gram,  500gram mướp, 1kg dưa leo',
                'day' => 1,
                'thumbnail' => 'https://freshfoodbox.vn/wp-content/uploads/2021/05/box-rau-cu-trai-cay-10-mon-dung-trong-3-ngay-foodbox-1a-scaled.jpg',
                'created_at' => Carbon::now()->addDays(-1),
            ],
        ]);
    }
}
