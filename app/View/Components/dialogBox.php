<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dialogBox extends Component
{
    public $type;
    public $name;
    public $label;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $label, $type)
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;


    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dialog-box');
    }
}