<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Livewire\Component;

class LandingPage extends Component
{
    public $email;

    public $currentStep = 1;

    public $paymentMethod = 'credit_card';

    public $login = false;

    protected $rules = [
        'email' => 'required|email:filter|unique:subscribers,email'
    ];

    public function render()
    {
        return view('livewire.landing-page');
    }

    public function subscribe()
    {
        $data = $this->validate();

        $subscriber = Subscriber::create($data);

        $this->reset('email');
    }

    public function createAccount()
    {
        $this->currentStep = 2;
    }

    public function cart()
    {
        $this->currentStep = 3;
    }

    public function billing()
    {
        $this->currentStep = 1;
    }

    public function nextStep()
    {
        $this->currentStep += 1;
    }

    public function changePaymentMethod($value) {
        $this->paymentMethod = $value;
    }

    public function submitOrder()
    {
        $this->submitted = true;
        $this->currentStep = 1;

        return redirect()->to('/register-success');
    }

    public function login()
    {
        $this->currentStep = 1;
        $this->login = true;
    }
}
