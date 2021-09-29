<?php

namespace Database\Seeders;

use App\Enums\OrderPaymentMethod;
use App\Enums\OrderStatus;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'shipping_name' => 'Nguyễn Ngọc Thuận',
                'shipping_ward_id' => 1,
                'shipping_district_id' => 1,
                'shipping_street' => '300 Nguyễn Xiển',
                'shipping_phone' => '0123456789',
                'shipper_id' => 1,
                'total_price' => '100000',
                'status' => OrderStatus::getRandomValue(),
                'payment_method' => OrderPaymentMethod::getRandomValue(),
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'shipping_name' => 'Đỗ Đức Quân',
                'shipping_ward_id' => 4,
                'shipping_district_id' => 2,
                'shipping_street' => '80 Nguyễn Hoàng',
                'shipping_phone' => '0264895687',
                'shipper_id' => 2,
                'total_price' => '350000',
                'status' => OrderStatus::getRandomValue(),
                'payment_method' => OrderPaymentMethod::getRandomValue(),
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'shipping_name' => 'Bùi Thọ Hoàng',
                'shipping_ward_id' => 6,
                'shipping_district_id' => 3,
                'shipping_street' => 'Số 8 Tôn Thất Thuyết',
                'shipping_phone' => '0365487951',
                'shipper_id' => 3,
                'total_price' => '4560000',
                'status' => OrderStatus::getRandomValue(),
                'payment_method' => OrderPaymentMethod::getRandomValue(),
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 4,
                'user_id' => 4,
                'shipping_name' => 'Dương Quỳnh Anh',
                'shipping_ward_id' => 7,
                'shipping_district_id' => 4,
                'shipping_street' => '215 Triều Khúc',
                'shipping_phone' => '0259785422',
                'shipper_id' => 4,
                'total_price' => '2356999',
                'status' => OrderStatus::getRandomValue(),
                'payment_method' => OrderPaymentMethod::getRandomValue(),
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 5,
                'user_id' => 5,
                'shipping_name' => 'Đào Hồng Luyến',
                'shipping_ward_id' => 8,
                'shipping_district_id' => 5,
                'shipping_street' => '80 Nguyễn Hoàng',
                'shipping_phone' => '0456789213',
                'shipper_id' => 5,
                'total_price' => '100000',
                'status' => OrderStatus::getRandomValue(),
                'payment_method' => OrderPaymentMethod::getRandomValue(),
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 6,
                'user_id' => 6,
                'shipping_name' => 'Hà Duy Nhật',
                'shipping_ward_id' => 10,
                'shipping_district_id' => 6,
                'shipping_street' => '141 Trương Định',
                'shipping_phone' => '0976812345',
                'shipper_id' => 6,
                'total_price' => '100000',
                'status' => OrderStatus::getRandomValue(),
                'payment_method' => OrderPaymentMethod::getRandomValue(),
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 7,
                'user_id' => 7,
                'shipping_name' => 'Hoàng Đắc Phương',
                'shipping_ward_id' => 13,
                'shipping_district_id' => 7,
                'shipping_street' => '7 Phạm Hùng',
                'shipping_phone' => '0979055555',
                'shipper_id' => 7,
                'total_price' => '90000',
                'status' => OrderStatus::getRandomValue(),
                'payment_method' => OrderPaymentMethod::getRandomValue(),
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 8,
                'user_id' => 8,
                'shipping_name' => 'Nguyễn Xuân Hinh',
                'shipping_ward_id' => 16,
                'shipping_district_id' => 8,
                'shipping_street' => '89 Cầu Giấy',
                'shipping_phone' => '0986960000',
                'shipper_id' => 8,
                'total_price' => '44000800',
                'status' => OrderStatus::getRandomValue(),
                'payment_method' => OrderPaymentMethod::getRandomValue(),
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 9,
                'user_id' => 9,
                'shipping_name' => 'Nguyễn Việt Cường',
                'shipping_ward_id' => 19,
                'shipping_district_id' => 9,
                'shipping_street' => '70 Đường Láng',
                'shipping_phone' => '0123443211',
                'shipper_id' => 9,
                'total_price' => '9080000',
                'status' => OrderStatus::getRandomValue(),
                'payment_method' => OrderPaymentMethod::getRandomValue(),
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 10,
                'user_id' => 10,
                'shipping_name' => 'Phạm Đức Thắng',
                'shipping_ward_id' => 22,
                'shipping_district_id' => 16,
                'shipping_street' => '30 Hàng Than',
                'shipping_phone' => '0111111111',
                'shipper_id' => 10,
                'total_price' => '120000',
                'status' => OrderStatus::getRandomValue(),
                'payment_method' => OrderPaymentMethod::getRandomValue(),
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
        ]);
    }
}
