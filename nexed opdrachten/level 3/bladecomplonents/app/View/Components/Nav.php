<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Nav extends Component
{
    public $active;

    public function __construct($active = null)
    {
        $this->active = $active;
    }

    public function render()
    {
        return view('components.nav');
    }
}
