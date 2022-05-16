<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\Authenticatable;
use Livewire\Component;

class RegisterSuccessPage extends Component
{
    use Authenticatable;

    public $email;

    public $password;

    public $currentStep = 1;

    protected $rules = [
        'email' => 'required|email:filter|exists:users,email',
        'password' => 'required'
    ];

    public function render()
    {
        return view('livewire.register-success-page');
    }
}
