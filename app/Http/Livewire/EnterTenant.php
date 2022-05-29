<?php

namespace App\Http\Livewire;

use App\Models\Tenant;
use Livewire\Component;

class EnterTenant extends Component
{
    public $step = 1;

    public $tenantName;

    public $dateOfBirth;

    public $postcode;

    // REASONS
    public $nonePaymentOfRent;

    public $noice;

    public $damageToProperty;

    public $termsOfLeaseBroken;

    public $antiSocialBehaviour;

    public $noBoilerForAPeriodOfTime;

    public $damp;

    public $bathroomOfPlumbingIssues;

    public $kitchinIssues;

    public $behaviorRecordedAsGood;

    public $result = 0;

    public function render()
    {
        return view('livewire.enter-tenant');
    }

    public function next()
    {
        $rules = $this->getStepRules();

        $this->validate($rules);

        if ($this->isReadyForSubmit()) {
            $tenant = Tenant::firstOrCreate([
                'name' => $this->tenantName,
                'date_of_birth' => $this->dateOfBirth,
                'postcode' => $this->postcode,
            ]);

            $tenant->reports()
                ->create([
                    'none_payment_of_rent' => $this->parseToBoolean($this->nonePaymentOfRent),
                    'noice' => $this->parseToBoolean($this->noice),
                    'damage_to_property' => $this->parseToBoolean($this->damageToProperty),
                    'terms_of_lease_broken' => $this->parseToBoolean($this->termsOfLeaseBroken),
                    'anti_social_behaviour' => $this->parseToBoolean($this->antiSocialBehaviour),
                    'no_boiler_for_a_period_of_time' => $this->parseToBoolean($this->noBoilerForAPeriodOfTime),
                    'damp' => $this->parseToBoolean($this->damp),
                    'bathroom_of_plumbing_issues' => $this->parseToBoolean($this->bathroomOfPlumbingIssues),
                    'kitchin_issues' => $this->parseToBoolean($this->kitchinIssues),
                    'behavior_recorded_as_good' => $this->parseToBoolean($this->behaviorRecordedAsGood),
                    'added_by_user_id' => auth()->user()->id
                ]);

            if($this->parseToBoolean($this->nonePaymentOfRent) == 0 && $this->parseToBoolean($this->noice) == 0 && $this->parseToBoolean($this->damageToProperty) == 0 && $this->parseToBoolean($this->termsOfLeaseBroken) == 0 && $this->parseToBoolean($this->antiSocialBehaviour) == 0){
                $this->result = 1;
            }
            else{
                if($this->parseToBoolean($this->noBoilerForAPeriodOfTime) == 0 && $this->parseToBoolean($this->damp) == 0 && $this->parseToBoolean($this->bathroomOfPlumbingIssues) == 0 && $this->parseToBoolean($this->kitchinIssues) == 0 && $this->parseToBoolean($this->behaviorRecordedAsGood) == 1){
                    $this->result = 2;
                }
                else{
                    $this->result = 3;
                }
            }
        }

        $this->goToNextStep();
    }

    private function parseToBoolean(string $value): bool
    {
        return $value === 'yes';
    }

    public function backToAccount()
    {
        return redirect()->to('/account');
    }

    public function getStepRules()
    {
        if ($this->step === 1) {
            return [
                'tenantName' => 'required',
                'dateOfBirth' => 'required|date',
                'postcode' => 'required',
            ];
        }

        if ($this->step === 2) {
            return [
                'nonePaymentOfRent' => 'required',
                'noice' => 'required',
                'damageToProperty' => 'required',
                'termsOfLeaseBroken' => 'required',
                'antiSocialBehaviour' => 'required',
            ];
        }

        // step 3
        return [
            'noBoilerForAPeriodOfTime' => 'required',
            'damp' => 'required',
            'bathroomOfPlumbingIssues' => 'required',
            'kitchinIssues' => 'required',
            'behaviorRecordedAsGood' => 'required',
        ];
    }

    private function goToNextStep()
    {
        $this->step += 1;
    }

    private function isReadyForSubmit()
    {
        return $this->step > 2;
    }
}
