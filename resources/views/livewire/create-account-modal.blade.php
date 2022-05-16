<div>
    <x-modal wire:model.debounce="show">
        <div class="w-full flex justify-between items-center absolute top-0 left-0 px-4 py-2">
            <button @disabled($currentStep === 1) wire:click="backStep" class="flex items-center disabled:opacity disabled:text-gray-300">
                <x-feathericon-arrow-left-circle class="h-4 w-4 mr-2" />
                Back
            </button>

            <x-button-close-modal name="create-account-modal" wire:model.debounce="show"></x-button-close-modal>
        </div>

        <x-create-account-stepper :currentStep="$currentStep"></x-create-account-stepper>

        @if ($currentStep === 1)
            @include('components.create-account')
        @endif

        @if ($currentStep === 2)
            @include('components.select-subscription')
        @endIf

        @if ($currentStep === 3)
            @include('components.billing')
        @endIf
    </x-modal>
</div>
