<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserName extends Component
{
    /**
     * Create a new component instance.
     */
    public $userName;
    public function __construct($userName)
    {
        $this->userName = $userName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user-name');
    }
}
