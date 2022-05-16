<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    const STATE_SHOW = 'show';

    const STATE_CLOSE = 'close';

    public $show = false;

    public $listeners = [
        'show' => 'show',
        'close' => 'close'
    ];

    public function show()
    {
        $this->show = true;
    }

    public function close()
    {
        $this->show = false;
    }
}
