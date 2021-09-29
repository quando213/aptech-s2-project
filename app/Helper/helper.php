<?php

use App\Enums\OrderStatus;
use App\Enums\UserRole;
use App\Models\Notification;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

const DISPLAY_DATE_FORMAT = 'd/m/Y';
const DISPLAY_DATETIME_FORMAT = 'd/m/Y H:m:s';

function isAdmin(): bool
{
    return Auth::user()->role == UserRole::ADMIN;
}

function isShipper(): bool
{
    return Auth::user()->role == UserRole::SHIPPER;
}

function arrayToOptions($array, $label_attribute, $key_attribute = null): array
{
    $options = [];
    foreach ($array as $item) {
        if ($key_attribute) {
            $options[$item[$key_attribute]] = $item[$label_attribute];
        } else {
            if (!in_array($item[$label_attribute], $options)) {
                array_push($options, $item[$label_attribute]);
            }
        }
    }
    return $options;
}

function buildQuery(Request $request, $data, array $where_attributes = []) {
    $sort = urldecode($request->query('sort'));
    if ($sort) {
        $sort_attribute = explode(' ', $sort)[0];
        $sort_order = explode(' ', $sort)[1] ?? 'ASC';
        $data = $data->orderBy($sort_attribute, $sort_order);
    } else {
        $data = $data->orderBy('created_at', 'desc');
    }
    foreach ($where_attributes as $attribute) {
        $value = $request->query($attribute);
        if ($value) {
            $data = $data->where($attribute, $value);
        }
    }
    return $data;
}

function sendNotifications(array $receivers, string $message, $order_id = null, $custom_url = null)
{
    foreach ($receivers as $receiver)
    {
        $notification = new Notification();
        $notification->user_id = $receiver;
        $notification->message = $message;
        $notification->order_id = $order_id;
        $notification->custom_url = $custom_url;
        $notification->save();
    }
}

function notifyOrderStatusUpdate($order_id)
{
    $order = Order::find($order_id);
    $message = '';
    switch ($order->status)
    {
        case OrderStatus::CREATED:
            $message = 'Chúng tôi đã ghi nhận đơn hàng #' . $order_id . ' của bạn với giá trị ' . $order->total_price . '. Hãy hoàn tất thanh toán để chúng tôi có thể sớm hoàn thành "đi chợ hộ" bạn nhé.';
            break;
        case OrderStatus::PAID:
            $message = 'Thanh toán hoàn tất cho đơn hàng #' .$order_id . '. Chúng tôi sẽ gửi thông báo ngay khi đơn hàng bắt đầu được mua.';
            break;
        case 3:
            $message = 'Đơn hàng #' .$order_id . ' chuẩn bi đươc giao bởi ' . $order->shipper->getFullNameWithPosition() . '. Vui lòng giữ điện thoại.';
            break;
        case 4:
            $message = 'Đơn hàng #' .$order_id . ' đã được giao thành công bởi ' . $order->shipper->getFullNameWithPosition() . '.';
            break;
        case 5:
            $message = "Đơn hàng #' .$order_id . ' của bạn đã bị huỷ.";
            break;
    }
    sendNotifications([$order->user_id], $message, $order_id);
}
