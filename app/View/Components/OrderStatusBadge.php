<?php

namespace App\View\Components;

use App\Enums\OrderStatus;
use Illuminate\View\Component;

class OrderStatusBadge extends Component
{
    /**
     * @var integer
     */

    public int $status;

    /**
     * Create a new component instance.
     *
     * @param $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.order-status-badge');
    }
}
