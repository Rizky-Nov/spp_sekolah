<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class master extends Component
{
    /**
     * Create a new component instance.
     */

    public $master;
    public $header;

    public function __construct($master = null)
    {
        $this->master = $master ?? "SPP";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.master');
    }
}
