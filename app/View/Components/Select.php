<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public string $name;
    public array $options;
    public string $selected;
    public string $placeholder;
    public string $optionAll;
    public string $icon;
    public bool $sameKeyValue;
    public bool $isFilter;
    public bool $disabled;

    /**
     * Create a new component instance.
     *
     * @param $name
     * @param array $options
     * @param string $selected
     * @param string $placeholder
     * @param string $optionAll
     * @param string $icon
     * @param bool $sameKeyValue
     * @param bool $isFilter
     * @param bool $disabled
     */
    public function __construct($name, array $options, $selected = '', $placeholder = '', $optionAll = '', $icon = '', $sameKeyValue = false, $isFilter = false, $disabled = false)
    {
        $this->name = $name;
        $this->options = $options;
        $this->selected = $selected;
        $this->placeholder = $placeholder;
        $this->optionAll = $optionAll;
        $this->icon = $icon;
        $this->sameKeyValue = $sameKeyValue;
        $this->isFilter = $isFilter;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('Admin.components.select');
    }
}
