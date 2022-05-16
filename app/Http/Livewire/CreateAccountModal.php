<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use App\Models\Plan;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class CreateAccountModal extends Modal
{
    const STEP_ACCOUNT = 1;

    const STEP_CART = 2;

    const STEP_BILLING = 3;

    const COMPONENT = 'create-account-modal';

    const PLAN_STANDARD = 1;
    
    const PLAN_AGENCY = 2;

    // Fields
    public $firstName;

    public $lastName;

    public $email;

    public $confirmEmail;

    public $password;

    public $confirmPassword;

    public $isAgreedTermsAndServices = false;

    public $couponCode = '';

    public $couponApplied = false;

    public $couponOff = 0;

    public $cardName;

    public $cardNumber;
    
    public $expiryDate;

    public $cvv;

    public $currentStep = self::STEP_ACCOUNT;

    public $paymentMethod = 'credit_card';

    public int $selectedPlan = 1;

    public $client_secret; // 

    public $user;

    public $stripePaymentMethod;

    public $stripeToken;

    public $submittingAccountInfo = false;

    public $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users,email',
        'confirm_email' => 'required|email|same:email',
        'password' => 'required|min:5',
        'confirm_password' => 'required|same:password'
    ];

    // Computed Property
    public function getPlanProperty()
    {
        return Plan::find($this->selectedPlan);
    }

    public function getPlanPriceProperty()
    {
        if ($this->couponApplied && $this->couponOff) {
            return $this->plan->cost * ($this->couponOff / 100);
        }
        return $this->plan->cost;
    }

    public function mounted()
    {
        $this->selectedPlan = Plan::all()->first()->id;
    }

    public function updatedStripePaymentMethod($value)
    {
        if ($value) {
            $this->validate([
                'cardName' => 'required',
            ]);
           
            $user = User::findOrFail($this->user);

            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($value);
            $user->newSubscription('default', $this->plan->stripe_plan)
                ->create($value, [
                    'email' => $user->email,
                ]);
        }
    }

    public function updatedShow($value)
    {
        $this->resetExcept(['listeners']);
        $this->resetValidation();
    }

    public function updatedStripeToken($value)
    {
        if ($value) {
            try {
                $user = User::findOrFail($this->user);
                $plan = Plan::findOrFail($this->selectedPlan);

                $user->createOrGetStripeCustomer();
                $user->updateDefaultPaymentMethod($value);
                $userSubscription = $user->newSubscription('default', $plan->stripe_plan);

                if ($this->couponApplied) {
                    $userSubscription->withCoupon($this->couponCode);
                }

                $userSubscription->create($value, ['email' => $user->email]);
                $user->markEmailAsVerified();

                return redirect('/account/created?success=1');
            } catch (Exception $e) {
                $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Oooops! something went wrong! Please try again']);
            }
        }
    }

    public function render(): View
    {
        $plans = Plan::all();

        // set selected plan
        // $this->selectedPlan = $plans->first()->id;

        return view('livewire.create-account-modal', ['plans' => $plans]);
    }

    public function notOkToProceedStep($isBack = false)
    {
        $goToStep = $isBack ? $this->currentStep - 1 : $this->currentStep + 1;

        return $goToStep < self::STEP_ACCOUNT || $goToStep > self::STEP_BILLING;
    }

    public function resetAll()
    {
        $this->resetStep();
        $this->resetExcept(['listeners']);
        $this->resetValidation();
    }

    public function resetStep(): void
    {
        $this->currentStep = self::STEP_ACCOUNT;
    }

    public function nextStep(): void
    {
        if ($this->notOkToProceedStep()) {
            return;
        }

        if ($this->currentStep === self::STEP_ACCOUNT) {
            DB::transaction(function () {
                $user = User::where('email', $this->email)
                            ->whereNull('stripe_id')
                            ->first();
                if ($user) {
                    $user->delete();
                }

                $this->validate([
                    'firstName' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'confirmEmail' => 'required|email|same:email',
                    'password' => 'required|min:5',
                    'confirmPassword' => 'required|same:password',
                    'isAgreedTermsAndServices' => 'required|boolean'
                ]);
                $user = User::where('name', $this->firstName)
                            ->where('email', $this->email)
                            ->first();
    
                if (!$user) {
                    $user = User::create([
                        'name' => $this->firstName,
                        'email' => $this->email,
                        'password' => $this->password,
                    ]);
                }
    
                $this->user = $user->id;
                // verify immediately, since we don't have any specifiction for this
                // $user->markEmailAsVerified();
                $this->client_secret = $user->createSetupIntent()->client_secret;
            });
        }
        $this->currentStep += 1;
    }

    public function backStep(): void
    {
        if ($this->notOkToProceedStep(true)) {
            return;
        }

        $this->currentStep -= 1;
    }

    public function changePaymentMethod($method): void
    {
        $this->paymentMethod = $method;

        $this->dispatchBrowserEvent('change-payment-method');
    }

    public function changePlan(int $planId): void
    {
        $this->selectedPlan = $planId;
    }
    
    public function openLoginFormModal()
    {
        $this->emitTo(self::COMPONENT, Modal::STATE_CLOSE);

        $this->emitTo(LoginModal::COMPONENT, Modal::STATE_SHOW);
    }

    public function applyCoupon()
    {
        $this->validate(['couponCode' => 'required']);

        $coupon = Coupon::where('code', $this->couponCode)->first();

        if (!$coupon) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Coupon code is invalid!']);
            return;
        }

        $this->couponApplied = true;
        $this->couponOff = $coupon->percent_off;
    }

    public function close()
    {
        $this->resetAll();
        $this->show = false;
    }
}
