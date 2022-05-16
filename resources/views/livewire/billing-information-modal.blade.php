<div>
    <x-modal wire:model.debounce="show" class="bg-gray-300 w-2/4 relative">
        <div class="w-full flex justify-end items-center absolute top-0 left-0 px-4 py-2">
            <a href="javascript:void(0);" wire:click="close()" class="rounded-full bg-gray-200 hover:bg-gray-300">
                <svg class="w-6 h-6 text-gray-500 p-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </a>
        </div>
        <h1 class="text-3xl pt-20 pb-2 font-bold text-center">
            Billing Information 
        </h1>
        <p class="text-gray-6600 text-xs text-center py-2 px-5">Changes to your billing information will take effect starting with next scheduled payment and will be reflected on your next invoice.</p>
        <form wire:submit.prevent='saveBillingInformation' class="mb-10 p-5">
            
            <div class="bg-white my-3 border shadow rounded-md py-5">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="relative z-0 mb-6 w-full md:w-1/2 group px-3">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 {{ $errors->has('firstName') ? 'text-red-500' : '' }}">First Name</label>
                        <input type="text" wire:model='firstName' class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('firstName') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                        @error('firstName')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                    
                    {{-- <div class="relative z-0 mb-6 w-full group px-3">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 {{ $errors->has('lastName') ? 'text-red-500' : '' }}">Last Name</label>
                        <input type="text" wire:model='lastName' class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('lastName') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                        @error('lastName')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div> --}}
                </div>
                
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="relative z-0 mb-6 w-full group px-3">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 {{ $errors->has('phone') ? 'text-red-500' : '' }}">Phone</label>
                        <input type="text" wire:model='phone' class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('phone') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                        @error('phone')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                    
                    <div class="relative z-0 mb-6 w-full group px-3">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 {{ $errors->has('businessName') ? 'text-red-500' : '' }}">Business Name</label>
                        <input type="text" wire:model='businessName' class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('businessName') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                        @error('businessName')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col md:flex-row justify-between">
                    <div class="relative z-0 mb-6 w-full group px-3">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 {{ $errors->has('addressLine1') ? 'text-red-500' : '' }}">Address Line 1</label>
                        <input type="text" wire:model='addressLine1' class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('addressLine1') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                        @error('addressLine1')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                    
                    <div class="relative z-0 mb-6 w-full group px-3">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 {{ $errors->has('addressLine2') ? 'text-red-500' : '' }}">Address Line 2</label>
                        <input type="text" wire:model='addressLine2' class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('addressLine2') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                        @error('addressLine2')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col md:flex-row justify-between">
                    <div class="relative z-0 mb-6 w-full group px-3">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 {{ $errors->has('city') ? 'text-red-500' : '' }}">City</label>
                        <input type="text" wire:model='city' class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('city') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                        @error('city')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                    
                    <div class="relative z-0 mb-6 w-full group px-3">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 {{ $errors->has('postCode') ? 'text-red-500' : '' }}">Post code</label>
                        <input type="text" wire:model='postCode' class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('postCode') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                        @error('postCode')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="flex w-full ">
                <button type="submit" class="text-white bg-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-primary rounded-sm text-sm w-full sm:w-auto px-4 py-2 text-center md:mr-4 mx-4 md:mx-0 justify-center"><span wire:loading wire:target="saveBillingInformation"><x-loading-icon></x-loading-icon></span> Save</button>

                <button class="text-white bg-gray-300 hover:bg-primary focus:ring-4 focus:outline-none focus:ring-primary rounded-sm text-sm w-full sm:w-auto px-4 py-2 text-center md:mr-4 mx-4 md:mx-0 justify-center">Cancel</button>
            </div>
        </form>
    </x-modal>
</div>
