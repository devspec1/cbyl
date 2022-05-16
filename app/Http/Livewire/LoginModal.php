<?php

namespace App\Http\Livewire;

use App\Client\Stripe;
use App\Models\Plan;
use App\Http\Livewire\Traits\Authenticatable;
use App\Services\SubscriptionService;

class LoginModal extends Modal
{
    use Authenticatable;

    const COMPONENT = 'login-modal';

    public $email;

    public $password;

    private $subscriptionService;

    public $plans;

    public function mount()
    {
        $this->subscriptionService = new SubscriptionService(new Stripe());
    }

    public function updatedShow($value)
    {
        $this->resetExcept(['listeners', 'show']);
        $this->resetValidation();
    }

    public function render()
    {
        $plans = Plan::all();

        return view('livewire.login-modal')->with(['plans' => $plans]);
    }

    public function openForgotPassword()
    {
        $this->emitTo('login-modal', 'close');
        $this->emitTo('forgot-modal', 'show');
    }

    public function openCreateAccountModal()
    {
        $this->emitTo('login-modal', 'close');
        $this->emitTo('create-account-modal', 'show');
    }

    public function close()
    {
        $this->show = false;

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->email = '';
        $this->password = '';

        $this->resetErrorBag();
        $this->resetValidation();
    }
}
