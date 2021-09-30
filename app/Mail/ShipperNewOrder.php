<?php

namespace App\Mail;

use App\Models\Order;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShipperNewOrder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Order
     */

    public Order $order;

    /**
     * @var User
     */
    private User $shipper;

    /**
     * Create a new message instance.
     *
     * @param Order $order
     * @param User $shipper
     */
    public function __construct(Order $order, User $shipper)
    {
        $this->subject('Có đơn hàng mới trong khu vực của bạn: #' . $order->id);
        $this->order = $order;
        $this->shipper = $shipper;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.shippers.new-order');
    }
}
