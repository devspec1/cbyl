<?php

namespace App\Http\Livewire;

use App\Models\Tenant;
use Livewire\Component;

class EnterTenant extends Component
{
    public $step = 1;

    public $tenantName;

    public $dateOfBirth;

    public $description;

    public $age;

    public $dependants;

    public $maretalStatus;

    public $areasOfProperty;

    // REASONS
    public $nonePaymentOfRent;

    public $noice;

    public $drugs;

    public $damageToProperty;

    public $other1;

    public $noBoilerForAPeriodOfTime;

    public $damp;

    public $behaviorRecordedAsGood;

    public $bathroomOfPlumbingIssues;

    public $kitchinIssues;

    public $other2;

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
            ]);

            $tenant->reports()
                ->create([
                    'description' => $this->description,
                    'age' => $this->age,
                    'dependants' => $this->dependants,
                    'maretal_status' => $this->maretalStatus,
                    'areas_of_property' => $this->areasOfProperty,
                    'none_payment_of_rent' => $this->parseToBoolean($this->nonePaymentOfRent),
                    'noice' => $this->parseToBoolean($this->noice),
                    'drugs' => $this->parseToBoolean($this->drugs),
                    'damage_to_property' => $this->parseToBoolean($this->damageToProperty),
                    'other1' => $this->other1,
                    'no_boiler_for_a_period_of_time' => $this->parseToBoolean($this->noBoilerForAPeriodOfTime),
                    'damp' => $this->parseToBoolean($this->damp),
                    'behavior_recorded_as_good' => $this->parseToBoolean($this->behaviorRecordedAsGood),
                    'bathroom_of_plumbing_issues' => $this->parseToBoolean($this->bathroomOfPlumbingIssues),
                    'kitchin_issues' => $this->parseToBoolean($this->kitchinIssues),
                    'other2' => $this->other2,
                    'added_by_user_id' => auth()->user()->id
                ]);
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
                'dateOfBirth' => 'required|date'
            ];
        }

        if ($this->step === 2) {
            return [
                'description' => 'required',
                'age' => 'required|numeric',
                'dependants' => 'required|numeric',
                'maretalStatus' => 'required|numeric',
                'areasOfProperty' => 'required',
            ];
        }

        if ($this->step === 3) {
            return [
                'nonePaymentOfRent' => 'required',
                'noice' => 'required',
                'drugs' => 'required',
                'damageToProperty' => 'required',
                'other1' => 'string',
            ];
        }

        // step 3
        return [
            'noBoilerForAPeriodOfTime' => 'required',
            'damp' => 'required',
            'behaviorRecordedAsGood' => 'required',
            'bathroomOfPlumbingIssues' => 'required',
            'kitchinIssues' => 'required',
            'other2' => 'string',
        ];
    }

    private function goToNextStep()
    {
        $this->step += 1;
    }

    private function isReadyForSubmit()
    {
        return $this->step > 3;
    }
}
