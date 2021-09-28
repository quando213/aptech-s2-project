<?php

use App\Enums\OrderPaymentMethod;
use App\Enums\OrderStatus;
use App\Enums\ProductUnit;

return [

    OrderStatus::class => [
        OrderStatus::CREATED => 'Chờ thanh toán',
        OrderStatus::PAID => 'Chờ giao hàng',
        OrderStatus::IN_DELIVERY => 'Đang giao hàng',
        OrderStatus::COMPLETED => 'Hoàn thành',
        OrderStatus::CANCELED => 'Đã hủy'
    ],

    OrderPaymentMethod::class => [
        OrderPaymentMethod::COD => 'Thanh toán khi nhận hàng',
        OrderPaymentMethod::VNPay => 'VNPay'
    ],

    ProductUnit::class => [
        ProductUnit::Item => 'Cái'
    ]
];
