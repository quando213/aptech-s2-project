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
                'name' => 'Thịt-Cá-Trứng',
                'description' => 'Các sản phẩm từ thịt, cá, trứng',
                'sort_number' => 1,
                'thumbnail' => 'https://noitroonline.com/wp-content/uploads/2020/10/rau-cu-qua-thit-ca-trung-thuy-hai-san-banh-keo-do-kho-bia-ruou-do-an-nhanh-do-an-vat-thuc-pham-dong-lanh-trai-cay-sach-online-1.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 2,
                'name' => 'Rau-Củ-Quả',
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
                'thumbnail' => 'https://startuanit.net/wp-content/uploads/2021/04/hinh-nen-trai-cay-cho-iphone-23.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 4,
                'name' => 'Sữa-Sản phẩm từ sữa',
                'description' => 'Các sản phẩm sữa uống và các sản phẩm có nguyên liệu là sữa',
                'sort_number' => 4,
                'thumbnail' => 'https://daylambanhngon.com/public/backend/filemanager/source/s%E1%BB%AFa/diem-nhanh-8-loai-thuc-pham-la-lieu-thuoc-bo-tu-nhien-danh-cho-me-bau3.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 5,
                'name' => 'Đồ uống-Giải khát',
                'description' => 'Các loại đồ uống và nước giải khát',
                'sort_number' => 5,
                'thumbnail' => 'https://sc04.alicdn.com/kf/H8f2a003a41124024bc9e030f40defc91O.jpeg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 6,
                'name' => 'Bánh kẹo-Đồ ăn vặt',
                'description' => 'Các sản phẩm bánh kẹo và đồ ăn vặt',
                'sort_number' => 6,
                'thumbnail' => 'https://cdn.vietnambiz.vn/2020/1/10/b8d17banhkeo650-1578665377626-15786653776261737143785.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 7,
                'name' => 'Dầu ăn-Gia vị-Đồ khô ',
                'description' => 'Các loại dầu ăn, gia vị và đồ khô',
                'sort_number' => 7,
                'thumbnail' => 'https://isaac.vn/wp-content/uploads/2020/11/cac-loai-gia-vi.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
        ]);
    }
}
