<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PrivacyPolicyPage extends Component
{
    protected $rules = [];

    public function render()
    {
        return view('livewire.privacy-policy-page');
    }
}
