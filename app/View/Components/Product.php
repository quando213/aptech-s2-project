<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Product extends Component
{
    /**
     * @var \App\Models\Product
     */
    public $product;

    /**
     * Create a new component instance.
     *
     * @param $product
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product');
    }
}
