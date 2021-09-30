<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
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
                'name' => 'Thịt - Cá - Trứng',
                'description' => 'Các sản phẩm từ thịt, cá, trứng',
                'sort_number' => 1,
                'thumbnail' => 'https://noitroonline.com/wp-content/uploads/2020/10/rau-cu-qua-thit-ca-trung-thuy-hai-san-banh-keo-do-kho-bia-ruou-do-an-nhanh-do-an-vat-thuc-pham-dong-lanh-trai-cay-sach-online-1.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 2,
                'name' => 'Rau - Củ - Quả',
                'description' => 'Các sản phẩm rau, củ, quả',
                'sort_number' => 2,
                'thumbnail' => 'https://anhdep123.com/wp-content/uploads/2020/11/hinh-anh-mot-so-loai-rau.png',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 3,
                'name' => 'Trái cây',
                'description' => 'Các sản phẩm trái cây tươi',
                'sort_number' => 3,
                'thumbnail' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzeVCE2zv7X5QEhxCCFxgwO5l8C_LtkxTBnw&usqp=CAU',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 4,
                'name' => 'Sữa - Sản phẩm từ sữa',
                'description' => 'Các sản phẩm sữa uống và các sản phẩm có nguyên liệu là sữa',
                'sort_number' => 4,
                'thumbnail' => 'https://template.hasthemes.com/gsore/gsore/assets/img/product/category/category-home-1-img-3.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 5,
                'name' => 'Đồ uống - Giải khát',
                'description' => 'Các loại đồ uống và nước giải khát',
                'sort_number' => 5,
                'thumbnail' => 'https://template.hasthemes.com/gsore/gsore/assets/img/product/category/category-home-1-img-7.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 6,
                'name' => 'Bánh kẹo - Đồ ăn vặt',
                'description' => 'Các sản phẩm bánh kẹo và đồ ăn vặt',
                'sort_number' => 6,
                'thumbnail' => 'https://template.hasthemes.com/gsore/gsore/assets/img/product/category/category-home-1-img-9.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 7,
                'name' => 'Dầu ăn - Gia vị - Đồ khô ',
                'description' => 'Các loại dầu ăn, gia vị và đồ khô',
                'sort_number' => 7,
                'thumbnail' => 'https://acecookvietnam.vn/wp-content/uploads/2019/05/BAI-PHONG-VAN.png',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 8,
                'name' => 'Hóa-mỹ phẩm',
                'description' => 'Các Lại mỹ phẩm làm đẹp',
                'sort_number' => 8,
                'thumbnail' => 'https://heranature.vn/wp-content/uploads/2020/03/hoa-my-pham-3.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 9,
                'name' => 'Chăm sóc cá nhân',
                'description' => 'Các vật dụng cá nhân',
                'sort_number' => 9,
                'thumbnail' => 'https://cdn.vuahanghieu.com/unsafe/0x0/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/news/content/2019/10/10-cac-hang-thuong-hieu-duoc-my-pham-noi-tieng-vhh-18-jpg-1570700347-10102019163907.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 10,
                'name' => 'Chăm sóc mẹ và bé',
                'description' => 'Các đồ dùng cho mẹ bầu và trẻ sơ sinh',
                'sort_number' => 10,
                'thumbnail' => 'https://salt.tikicdn.com/cache/550x550/ts/product/d1/69/ca/8017b9ad5f2391fff5aa379f874e0b03.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
        ]);
    }
}
