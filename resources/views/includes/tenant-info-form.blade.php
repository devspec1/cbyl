<form class="flex flex-col">
    <div class="mb-6">
        <label for="name" class="block mb-2 text-[18px] font-bold text-gray-900 {{ $errors->has('tenantName') ? 'text-red-700' : '' }}">Name</label>
        <input wire:model='tenantName' type="text" id="name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full md:w-2/3 p-2.5 {{ $errors->has('tenantName') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}"
            placeholder="Tenants name">
        @error('tenantName')
            <x-error message="{{ $message }}"></x-error>
        @enderror
    </div>
    <div class="mb-6">
        <label for="date" class="block mb-2 text-[18px] font-bold text-gray-900 {{ $errors->has('dateOfBirth') ? 'text-red-700' : '' }}">Date of birth</label>
        <input id="date_of_birth" wire:model='dateOfBirth' autocomplete="off" type="date"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary focus:border-primary block w-full md:w-2/3 p-2.5 {{ $errors->has('dateOfBirth') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}"
            placeholder="Select date">
        @error('dateOfBirth')
            <x-error message="{{ $message }}"></x-error>
        @enderror
    </div>
    <div class="mb-6">
        <label for="name" class="block mb-2 text-[18px] font-bold text-gray-900 {{ $errors->has('postcode') ? 'text-red-700' : '' }}">Area of Property</label>
        <input wire:model='postcode' type="text" id="name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full md:w-2/3 p-2.5 {{ $errors->has('postcode') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}"
            placeholder="Enter postcode">
        @error('postcode')
            <x-error message="{{ $message }}"></x-error>
        @enderror
    </div>
    <div class="mt-2">
        <button type="button" wire:click='next'
            class="text-white flex justify-center items-center bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-primary font-bold rounded-lg text-[14px] w-[141px] h-[45px] px-5 py-2.5 text-center ">
            <span class="mr-3">Continue</span> <x-arrow-icon></x-arrow-icon>
        </button>
    </div>
</form>