<div>

    @if ($step === 1)
        <div class="flex grow justify-between w-full h-full px-10 mb-40 mt-40">
            <div class="w-full md:w-4/12 lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-black font-bold text-xl leading-tight mb-4 md:text-[68px]">
                    Search For A tenant
                </h1>
                <form wire:submit.prevent='search' class="flex flex-col">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm md:text-[18px] font-bold text-gray-900 {{ $errors->has('tenantName') ? 'text-red-500' : '' }}">Name</label>
                        <input wire:model='tenantName' type="text" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-2/3 p-2.5 "
                            placeholder="Tenants name" required>
                        @error('tenantName')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm md:text-[18px] font-bold text-gray-900 {{ $errors->has('date') ? 'text-red-500' : '' }}">Date of Birth</label>
                        <input wire:model='date' type="date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-2/3 p-2.5 {{ $errors->has('date') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}"
                            placeholder="Select date">
                        @error('date')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="postcode" class="block mb-2 text-sm md:text-[18px] font-bold text-gray-900 {{ $errors->has('postcode') ? 'text-red-500' : '' }}">Area of Property</label>
                        <input wire:model='postcode' type="text" id="postcode"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-2/3 p-2.5 "
                            placeholder="Enter postcode" required>
                        @error('postcode')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                    <button type="submit"
                        class="text-white flex justify-center items-center bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-[135px] md:w-2/6 px-5 py-2.5 text-center">
                        <span class="mr-3">Continue</span> <x-arrow-icon></x-arrow-icon></button>
                </form>
            </div>
            <div class="w-8/12 lg:w-7/12 hidden justify-end md:flex items-center pl-10">
                @svg('search-tenant-information.svg', 'h-[300.69px] m-auto')
            </div>
        </div>
    @endif

    @if ($step === 2)
        <form class="md:px-10">
            <h1 class="text-black font-bold text-2xl md:text-6xl leading-tight my-10 md:my-20">Previous Reports On {{ $this->tenantName }}</h1>
            <div>
                <label class="md:font-semibold md:my-2 block">Number of reports: {{ count($reports) }}</label>
                <div class="flex space-x-4">
                    @foreach ($reports as $key => $report)
                    <div wire:click="selectReport({{ $report }})" class="w-10 border shadow  hover:cursor-pointer">
                        @if ($report->id === $selectedReport->id)
                            @svg('report-unselected.svg')
                        @else
                            @svg('report-selected.svg')
                        @endif
                    </div>
                    @endforeach
                </div>
                <div class="w-full flex flex-col md:flex-row justify-between mt-10">
                    <div class="flex flex-col w-full md:w-1/3">
                        <div class="flex flex-col mb-6 md:mr-5">
                            <label for="dateOfBirth"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 md:font-semibold">Date of Birth</label>
                            <input id="dateOfBirth"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                readonly value="{{ $this->date }}">
                        </div>    
                    </div>
                    <div class="flex flex-col w-full md:w-1/3">
                        <div class="flex flex-col mb-6 md:mr-5">
                            <label for="postcode"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 md:font-semibold">Area of Property</label>
                            <input id="postcode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                readonly value="{{ $this->postcode }}">
                        </div>
                    </div>
                    <div class="flex flex-col w-full md:w-1/3"></div>
                </div>

                <span class="w-full md:w-2/3 block m-auto border bg-gray-700 my-8"></span>

                <div class="w-full flex flex-col md:flex-row justify-between mt-10">
                    <div class="flex flex-col">
                        <div class="flex flex-col mb-6">
                            <label for="none_of_payment_yes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 md:font-semibold">None Payment of Rent</label>
                            <div class="flex space-x-4">
                                <div class="relative w-2/5">
                                    <input {{ $selectedReport->none_payment_of_rent === 1 ? 'checked' : '' }} disabled class="sr-only peer" type="radio" value="yes" name="none_of_payment" id="none_of_payment_yes" value="{{ $selectedReport->none_payment_of_rent }}">
                                    <label
                                        class="flex justify-around w-full bg-white border border-gray-300 rounded-lg focus:outline-none hover:bg-gray-50 peer-checked:bg-rd peer-checked:text-white peer-checked:border-transparent py-1 px-3"
                                        for="none_of_payment_yes">Yes</label>
                                </div>

                                <div class="relative w-2/5">
                                    <input  {{ $selectedReport->none_payment_of_rent !== 1 ? 'checked' : '' }} disabled class="sr-only peer" type="radio" value="no" name="none_of_payment" id="none_of_payment_no">
                                    <label
                                        class="flex justify-around w-around bg-white border border-gray-300 rounded-lg focus:outline-none hover:bg-gray-50 peer-checked:bg-st peer-checked:text-white peer-checked:border-transparent py-1 px-3"
                                        for="none_of_payment_no">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col mb-6">
                            <label for="noice_yes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 md:font-semibold">Noise</label>
                            <div class="flex space-x-4">
                                <div class="relative w-2/5">
                                    <input {{ $selectedReport->noice === 1 ? 'checked' : '' }} disabled class="sr-only peer" type="radio" value="yes" name="noice" id="noice_yes">
                                    <label
                                        class="flex justify-around w-full bg-white border border-gray-300 rounded-lg focus:outline-none hover:bg-gray-50 peer-checked:bg-rd peer-checked:text-white peer-checked:border-transparent py-1 px-3"
                                        for="noice_yes">Yes</label>
                                </div>

                                <div class="relative w-2/5">
                                    <input {{ $selectedReport->noice !== 1 ? 'checked' : '' }}  disabled class="sr-only peer" type="radio" value="no" name="noice" id="noice_no">
                                    <label
                                        class="flex justify-around w-around bg-white border border-gray-300 rounded-lg focus:outline-none hover:bg-gray-50 peer-checked:bg-st peer-checked:text-white peer-checked:border-transparent py-1 px-3"
                                        for="noice_no">No</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <div class="flex flex-col mb-6">
                            <label for="damage_of_property_yes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 md:font-semibold">Damage to the Property</label>
                            <div class="flex space-x-4">
                                <div class="relative w-2/5">
                                    <input {{ $selectedReport->damage_to_property === 1 ? 'checked' : '' }} disabled class="sr-only peer" type="radio" value="yes" name="damage_of_property" id="damage_of_property_yes">
                                    <label
                                        class="flex justify-around w-full bg-white border border-gray-300 rounded-lg focus:outline-none hover:bg-gray-50 peer-checked:bg-rd peer-checked:text-white peer-checked:border-transparent py-1 px-3"
                                        for="damage_of_property_yes">Yes</label>
                                </div>

                                <div class="relative w-2/5">
                                    <input {{ $selectedReport->damage_to_property !== 1 ? 'checked' : '' }} disabled class="sr-only peer" type="radio" value="no" name="damage_of_property" id="damage_of_property_no">
                                    <label
                                        class="flex justify-around w-around bg-white border border-gray-300 rounded-lg focus:outline-none hover:bg-gray-50 peer-checked:bg-st peer-checked:text-white peer-checked:border-transparent py-1 px-3"
                                        for="damage_of_property_no">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col mb-6">
                            <label for="terms_of_lease_broken_yes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 md:font-semibold">Terms of Lease Broken</label>
                            <div class="flex space-x-4">
                                <div class="relative w-2/5">
                                    <input {{ $selectedReport->terms_of_lease_broken === 1 ? 'checked' : '' }} disabled class="sr-only peer" type="radio" value="yes" name="terms_of_lease_broken" id="terms_of_lease_broken_yes">
                                    <label
                                        class="flex justify-around w-full bg-white border border-gray-300 rounded-lg focus:outline-none hover:bg-gray-50 peer-checked:bg-rd peer-checked:text-white peer-checked:border-transparent py-1 px-3"
                                        for="terms_of_lease_broken_yes">Yes</label>
                                </div>

                                <div class="relative w-2/5">
                                    <input {{ $selectedReport->terms_of_lease_broken !== 1 ? 'checked' : '' }} disabled class="sr-only peer" type="radio" value="no" name="terms_of_lease_broken" id="terms_of_lease_broken_no">
                                    <label
                                        class="flex justify-around w-around bg-white border border-gray-300 rounded-lg focus:outline-none hover:bg-gray-50 peer-checked:bg-st peer-checked:text-white peer-checked:border-transparent py-1 px-3"
                                        for="terms_of_lease_broken_no">No</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <div class="flex flex-col mb-6">
                            <label for="anti_social_behaviour_yes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 md:font-semibold">Anti-Social Behaviour</label>
                            <div class="flex space-x-4">
                                <div class="relative w-2/5">
                                    <input {{ $selectedReport->anti_social_behaviour === 1 ? 'checked' : '' }} disabled class="sr-only peer" type="radio" value="yes" name="anti_social_behaviour" id="anti_social_behaviour_yes">
                                    <label
                                        class="flex justify-around w-full bg-white border border-gray-300 rounded-lg focus:outline-none hover:bg-gray-50 peer-checked:bg-rd peer-checked:text-white peer-checked:border-transparent py-1 px-3"
                                        for="anti_social_behaviour_yes">Yes</label>
                                </div>

                                <div class="relative w-2/5">
                                    <input {{ $selectedReport->anti_social_behaviour !== 1 ? 'checked' : '' }} disabled class="sr-only peer" type="radio" value="no" name="anti_social_behaviour" id="anti_social_behaviour_no">
                                    <label
                                        class="flex justify-around w-around bg-white border border-gray-300 rounded-lg focus:outline-none hover:bg-gray-50 peer-checked:bg-st peer-checked:text-white peer-checked:border-transparent py-1 px-3"
                                        for="anti_social_behaviour_no">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" wire:click='searchAgain'
                    class="my-10 text-white flex justify-center items-center bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center md:mb-28 w-40">Search
                    Again <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg></button>
            </div>
        </form>
    @endif
</div>
