<?php

namespace App\Http\Livewire;

use App\Models\Billing;
use App\Models\BillingInformation;
use Livewire\Component;

class BillingInformationModal extends Modal
{

    public $firstName;

    public $lastName;

    public $phone;

    public $businessName;

    public $addressLine1;

    public $addressLine2;

    public $city;

    public $postCode;

    public function mount(): void
    {
        $this->initializeUserBillingInformation();
    }

    private function initializeUserBillingInformation()
    {
        $user = auth()->user();

        if ($billing = $user->billingInformations()->first()) {
            $this->firstName = $billing->first_name;
            $this->lastName= $billing->lastName ?: '';
            $this->phone = $billing->phone;
            $this->businessName = $billing->business_name;
            $this->addressLine1 = $billing->address_line_1;
            $this->addressLine2 = $billing->address_line_2;
            $this->city = $billing->city;
            $this->postCode = $billing->postcode;
        }
    }

    public function render()
    {
        return view('livewire.billing-information-modal');
    }

    public function saveBillingInformation()
    {
        $payload = $this->validate([
            'firstName' => 'required',
            'lastName' => 'nullable',
            'phone' => 'required',
            'businessName' => 'required',
            'addressLine1' => 'required',
            'addressLine2' => 'required',
            'city' => 'required',
            'postCode' => 'required',
        ]);
        $user = auth()->user();
        // @todo refactor this by attach to User::class

        if ($billing = BillingInformation::where('user_id', $user->id)->first()) {
            $billing->update([
                'first_name' => $payload['firstName'],
                'last_name' => $payload['lastName'] ?: '',
                'phone' => $payload['phone'],
                'business_name' => $payload['businessName'],
                'address_line_1' => $payload['addressLine1'],
                'address_line_2' => $payload['addressLine2'],
                'city' => $payload['city'],
                'postcode' => $payload['postCode']
            ]);
        } else {
            BillingInformation::create([
                'first_name' => $payload['firstName'],
                'last_name' => $payload['lastName'] ?: '',
                'phone' => $payload['phone'],
                'business_name' => $payload['businessName'],
                'address_line_1' => $payload['addressLine1'],
                'address_line_2' => $payload['addressLine2'],
                'city' => $payload['city'],
                'postcode' => $payload['postCode'],
                'user_id' => $user->id
            ]);
        }

        $this->emitTo('billing-information-modal', 'close');
        $this->emit('resetBillingInformation', $payload);
    }
}
