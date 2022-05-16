<div class="px-10">
    <h1 class="text-3xl py-2 font-extrabold text-center">
        Protect Yourself Today
    </h1>
    @foreach ($plans as $plan)
        <button type="button" wire:click='changePlan({{ $plan->id }})' class="bg-white hover:bg-gray-200 w-full hover:cursor-pointer flex items-center justify-between p-6 {{ $this->selectedPlan === $plan->id ? 'border-2 border-secondary' : '' }} mb-6 rounded-2xl shadow">
            <div>
                <h2 class="text-gray-900 text-left">{{ $plan->name }}</h2>
                <p class="text-gray-500 text-xs text-left">{{ $plan->description }}</p>
            </div>
            <div class="text-gray-900">
                £{{ $plan->cost }}
            </div>
        </button>
    @endforeach

    <div class="mb-10 mx-4">
        <p class="text-right text-gray-500">Total: <span class="font-bold text-lg">£{{ $this->plan ? $this->plan->cost : 0 }}</span></p>
        <p class="text-right text-gray-500 mb-6">Inc. vat</p>
    </div>

    <div class="flex justify-end w-full pb-10">
        <button
            @disabled(!$this->plan)
            wire:click='nextStep'
            wire:loading.attr="disabled"
            type="button"
            class="text-white flex bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-primary rounded-sm text-sm w-36 md:w-36 py-2 text-center md:m-0 mx-4 justify-center items-center disabled:bg-opacity-50 disabled:cursor-not-allowed">
            <span wire:loading wire:target="nextStep"><x-loading-icon></x-loading-icon></span>
            <span class="mr-3">Continue</span> <x-arrow-icon></x-arrow-icon></button>
    </div>
</div>