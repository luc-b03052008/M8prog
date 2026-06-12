<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ShoeList extends Component
{
    public $shoes;

    public function __construct($shoes = [])
    {
        $this->shoes = $shoes;
    }

    public function render()
    {
        return view('components.shoe-list');
    }
}
