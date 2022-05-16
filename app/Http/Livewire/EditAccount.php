<?php

namespace App\Http\Livewire;

use App\Models\BillingInformation;
use App\Models\User;
use Livewire\Component;

class EditAccount extends Component
{
    public $selectedTab = 'general'; // default to general

    public $isEditCurrentPaymentMethod = false;

    public $email;

    public $firstName;

    public $confirmEmail;

    public $password;

    public $confirmPassword;

    public $isDisplayYourNameOnReports;

    public $lastName;

    public $phone;

    public $businessName;

    public $addressLine1;

    public $addressLine2;

    public $city;

    public $postCode;

    public $client_secret;

    public $paymentMethodlast4;

    protected $listeners = [
        'resetBillingInformation' => 'resetBillingInformation'
    ];

    public $stripeToken;

    public $couponCode = '';

    public $couponApplied = false;

    public $couponOff = 0;

    public function getPlanPriceProperty()
    {
        if ($this->couponApplied && $this->couponOff) {
            return $this->plan->cost * ($this->couponOff / 100);
        }
        return $this->plan->cost;
    }

    public function updatedStripeToken($value)
    {
        if ($value) {
            /** @var App\Models\User */
            $user = auth()->user();

            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($value);
            $this->paymentMethodlast4 = $user->defaultPaymentMethod() ? $user->defaultPaymentMethod()->card->last4 : '';

            $this->isEditCurrentPaymentMethod = false;
        }
    }

    public function mount(): void
    {
        $this->isDisplayYourNameOnReports = auth()->user()->is_display_your_name_on_reports;

        /** @var App\Models\User */
        $user = auth()->user();

        if ($billing = BillingInformation::where('user_id', $user->id)->first()) {
            $this->firstName = $billing->first_name;
            $this->lastName = $billing->last_name;
            $this->phone = $billing->phone;
            $this->businessName = $billing->business_name;
            $this->addressLine1 = $billing->address_line_1;
            $this->addressLine2 = $billing->address_line_2;
            $this->city = $billing->city;
            $this->postCode = $billing->postcode;

            // $this->email = $billing->email;
        }

        $this->firstName = $user->name;
        $this->email = $user->email;

        $this->client_secret = $user->createSetupIntent()->client_secret;
        $this->paymentMethodlast4 = $user->defaultPaymentMethod() ? $user->defaultPaymentMethod()->card->last4 : '';
       
    }

    public function render()
    {
        /** @var App\Models\User */
        $user = auth()->user();
       
        return view('livewire.edit-account', ['invoices' => $user->invoices()]);
    }

    public function selectedTab($tab)
    {
        $this->selectedTab = $tab;
    }

    public function editCurrentPaymentMethod()
    {
        $this->isEditCurrentPaymentMethod = true;
    }

    public function updateCurrentPaymentMethod()
    {
        $this->isEditCurrentPaymentMethod = false;
    }

    public function saveInformation()
    {
        $payload = $this->validate([
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
            'firstName' => 'required',
            'confirmEmail' => 'required||email|same:email'
        ]);

        $user = auth()->user();
        
        $user->update(['email' => $payload['email'], 'name' => $payload['firstName']]);
    }

    public function changePassword()
    {
        $payload = $this->validate([
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password'
        ]);

        $user = auth()->user();
        
        $user->update(['password' => $payload['password']]);

        session()->invalidate();

        return redirect('/?password-changed=1');
    }

    public function updateDisplayYourNameOnReports(bool $isdisplayYourNameOnReports): void
    {
        $this->isDisplayYourNameOnReports = $isdisplayYourNameOnReports;

        auth()->user()->displayYourNameOnReports($isdisplayYourNameOnReports);

        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Account successfully updated!']);
    }

    public function resetBillingInformation($payload)
    {
        $this->firstName = $payload['firstName'];
        $this->lastName = $payload['lastName'] ?: '';
        $this->phone = $payload['phone'];
        $this->businessName = $payload['businessName'];
        $this->addressLine1 = $payload['addressLine1'];
        $this->addressLine2 = $payload['addressLine2'];
        $this->city = $payload['city'];
        $this->postCode = $payload['postCode'];
    }

    public function savePaymentMethod()
    {
        // @todo implement payment method using stripe
    }

    public function cancelEditPaymentMethod()
    {
        $this->isEditCurrentPaymentMethod = false;
    }
}
