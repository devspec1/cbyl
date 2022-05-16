<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppNavigation extends Component
{
    public $showMenu = 'false';

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.navigation');
    }

    public function toggleMenu()
    {
        $this->showMenu = 'true';
    }
}
