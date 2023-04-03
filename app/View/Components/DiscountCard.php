<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DiscountCard extends Component
{
    public $discount;
    /**
     * Create a new component instance.
     */
    public function __construct($discount)
    {
        $this->discount = $discount;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.discount-card');
    }
}
