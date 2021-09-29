<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UploadSingleImage extends Component
{
    public string $name;
    public string $label;
    public string $placeholder;
    public $value;
    public int $col;

    /**
     * Create a new component instance.
     * @param $name
     * @param string $label
     * @param string $placeholder
     * @param null $value
     * @param $col
     */
    public function __construct($name, $label = '', $placeholder = '', $value = null, $col = 0)
    {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->col = $col;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.upload-single-image');
    }
}