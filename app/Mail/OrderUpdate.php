<?php

namespace App\Mail;

use App\Enums\OrderStatus;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderUpdate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Order
     */

    public Order $order;

    /**
     * Create a new message instance.
     *
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $subject = '';
        switch ($order->status)
        {
            case OrderStatus::CREATED:
                $subject = 'Đặt hàng thành công';
                break;
            case OrderStatus::PAID:
                $subject = 'Thanh toán hoàn tất';
                break;
            case OrderStatus::IN_DELIVERY:
                $subject = 'Đang xử lý';
                break;
            case OrderStatus::COMPLETED:
                $subject = 'Giao thành công';
                break;
            case OrderStatus::CANCELED:
                $subject = 'Đã hủy';
                break;
        }
        $this->subject($subject . ': Đơn hàng #' . $order->id);
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.order-update');
    }
}
