<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CircleImageBox extends Component
{
    /**
     * Create a new component instance.
     */

    public $path;
    public $altName;

    public function __construct($path, $altName)
    {
        $this->path = $path;
        $this->altName = $altName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.circle-image-box');
    }
}
