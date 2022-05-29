<?php

namespace App\Http\Livewire;

use App\Models\Report;
use App\Models\SearchLog;
use App\Models\Tenant;
use Carbon\Carbon;
use Livewire\Component;

class SearchTenant extends Component
{
    public $isSearchTenant = false;

    public $step = 1;

    public $tenantName = '';

    public $date;

    public $postcode;

    public $reports = [];

    public ?Report $selectedReport;

    public function render()
    {
        return view('livewire.search-tenant');
    }

    public function searchTenant()
    {
        $this->isSearchTenant = true;
    }

    public function search()
    {
        $this->validate([
            'tenantName' => 'required',
            'date' => 'required|date',
        ]);

        $user = auth()->user();
        if ($user->cannot('search-tenant')) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Your search credits have been elapsed.']);
            return;
        }

        $tenant = Tenant::where('name', $this->tenantName)->where('date_of_birth', Carbon::parse($this->date)->format('Y-m-d'))->latest()->first();

        SearchLog::create([
            'user_id' => $user->id,
            'name' => $this->tenantName,
            'date_of_birth' => Carbon::parse($this->date)->format('Y-m-d'),
            'num_results' => $tenant ? $tenant->reports->count() : 0,
        ]);

        if (!$tenant || $tenant->reports->count() === 0) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'No tenant or reports found!']);
            return;
        }

        $this->postcode = $tenant->postcode;
        $this->reports = $tenant->reports;
        $this->step += 1;
        $this->selectedReport = $tenant->reports->first();
    }

    public function searchAgain()
    {
        $this->step = 1;
        $this->tenantName = '';
        $this->date = '';
        $this->postcode = '';
        $this->reports = [];
        $this->selectedReport = null;
    }

    public function selectReport(Report $r)
    {
        if ($this->selectedReport->id === $r->id) {
            return;
        }

        $this->selectedReport = $r;
    }
}
