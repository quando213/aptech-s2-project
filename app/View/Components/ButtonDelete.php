<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonDelete extends Component
{
    public string $href;
    public int $id;
    public string $content;

    /**
     * Create a new component instance.
     *
     * @param $href
     * @param $id
     * @param string $content
     */
    public function __construct($href, $id, $content = '')
    {
        $this->href = $href;
        $this->id = $id;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('Admin.components.button-delete');
    }
}
