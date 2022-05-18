<div>

    @if ($step === 1)
        <div class="flex grow justify-around items-center w-full h-full py-28 px-10">
            <div class="w-full md:w-4/12 lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-black font-bold font-heading text-[21px] md:text-[68px] leading-tight mb-4">
                    Enter information about tenant
                </h1>
                @include('includes.tenant-info-form')
            </div>
            <div class="items-center justify-center w-[488.94px] h-[238.77px] pl-10 hidden md:flex">
                @svg('enter-tenant-information.svg', 'w-[362.73px] h-[285.69px] m-auto')
            </div>
        </div>
    @endif

    @if ($step === 2)
        <form class="flex flex-col grow justify-between w-full h-full py-28 px-10">
            <h1 class="text-black font-bold font-heading text-[68px] leading-tight pb-[106px]">Particulars of {{ $this->tenantName }}</h1>
            <div>
                <div class="w-full flex flex-col md:flex-row justify-between mt-10">
                    <div class="mb-6 w-full md:w-1/4">
                        <label for="description"
                            class="{{ $errors->has('description') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-heading font-semibold text-gray-900 dark:text-gray-300 {{ $errors->has('description') ? 'text-red-700' : '' }}">Description of
                            individual</label>
                        <textarea wire:model='description' rows="6" type="text" id="description"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-primary block w-full p-2.5 {{ $errors->has('description') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}"></textarea>
                        @error('description')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>

                    <div class="mb-0 md:mb-6 w-full md:w-1/4 flex flex-col">
                        <div class="mb-6">
                            <label for="age"
                                class="{{ $errors->has('age') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-heading font-semibold text-gray-900 dark:text-gray-300 {{ $errors->has('age') ? 'text-red-700' : '' }}">Age</label>
                            <input wire:model='age' type="number" id="age"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-primary {{ $errors->has('age') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}" required>
                            @error('age')
                                <x-error message="{{ $message }}"></x-error>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="dependants"
                                class="{{ $errors->has('dependants') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-semibold text-gray-900 dark:text-gray-300">Dependants</label>
                            <input wire:model='dependants' type="number" id="dependants"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-primary {{ $errors->has('dependants') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}"
                                required>
                            @error('dependants')
                                <x-error message="{{ $message }}"></x-error>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-0 md:mb-6 w-full md:w-1/4 flex flex-col">
                        <div class="mb-6">
                            <label for="maretalStatus"
                                class="{{ $errors->has('maretalStatus') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-semibold text-gray-900 dark:text-gray-300">Marital
                                Status</label>
                            <select name="maretalStatus" wire:model='maretalStatus' id="maretalStatus"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-primary {{ $errors->has('maretalStatus') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}">
                                <option value="">&nbsp;</option>
                                <option value="1">Single</option>
                                <option value="2">Married</option>
                                <option value="3">Widowed</option>
                                <option value="4">Divorced</option>
                            </select>
                            @error('maretalStatus')
                                <x-error message="{{ $message }}"></x-error>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="areasOfProperty"
                                class="{{ $errors->has('areasOfProperty') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-semibold text-gray-900 dark:text-gray-300">Area of
                                Property</label>
                            <input wire:model='areasOfProperty' type="text" id="areasOfProperty"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text      -sm rounded-lg focus:ring-blue-500 focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-primary {{ $errors->has('areasOfProperty') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}"
                                placeholder="" required>
                            @error('areasOfProperty')
                                <x-error message="{{ $message }}"></x-error>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex justify-end mt-10">
                    <button type="button" wire:click='next'
                        class="text-white flex justify-center items-center bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-primary font-semibold rounded-lg text-[14px] w-[141px] h-[45px] px-5 py-2.5 text-center ">
                        <span class="mr-3">Continue</span> <x-arrow-icon></x-arrow-icon>
                    </button>
                </div>
            </div>
        </form>
    @endif

    @if ($step === 3)
        <div class="flex flex-col grow justify-between w-full h-full py-28 px-10">
            <h1 class="text-black font-bold text-[68px] font-heading leading-tight pb-[106px]">
                Reasons for adding {{ $this->tenantName }}
            </h1>
            <div class="w-full flex flex-col md:flex-row justify-between">
                <div class="flex flex-col w-full md:w-1/3 mb-0 md:mb-6">
                    <div class="flex flex-col mb-6">
                        <label for="none_payment_of_rent_yes"
                            class="{{ $errors->has('nonePaymentOfRent') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-semibold text-gray-900">None Payment of Rent</label>
                        <div class="flex space-x-4">
                            <div class="relative w-1/3">
                                <input wire:model='nonePaymentOfRent' class="sr-only peer" type="radio" value="yes" name="none_payment_of_rent" id="none_payment_of_rent_yes">
                                <label
                                    class="text-[18px] w-[121px] h-[38px] flex justify-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('nonePaymentOfRent') ? 'bg-red-50 border' : '' }}"
                                    for="none_payment_of_rent_yes" style="font-family: 'Raleway'; display: flex; align-items: center;">Yes</label>
                            </div>

                            <div class="relative w-1/3">
                                <input wire:model='nonePaymentOfRent' class="sr-only peer" type="radio" value="no" name="none_payment_of_rent" id="none_payment_of_rent_no">
                                <label
                                    class="text-[18px] w-[121px] h-[38px] flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('nonePaymentOfRent') ? 'bg-red-50 border' : '' }}"
                                    for="none_payment_of_rent_no" style="font-family: 'Raleway'; display: flex; align-items: center;">No</label>
                            </div>
                            
                        </div>
                        @error('nonePaymentOfRent')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-6">
                        <label for="noice_yes"
                            class="{{ $errors->has('noice') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-semibold text-gray-900 dark:text-gray-300">Noise</label>
                        <div class="flex space-x-4">
                            <div class="relative w-1/3">

                                <input wire:model='noice' class="sr-only peer" type="radio" value="yes" name="noice" id="noice_yes">
                                <label
                                    class="text-[18px] w-[121px] h-[38px] flex justify-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('noice') ? 'bg-red-50 border' : '' }}"
                                    for="noice_yes" style="font-family: 'Raleway'; display: flex; align-items: center;">Yes</label>
                            </div>

                            <div class="relative w-1/3">
                                <input wire:model='noice' class="sr-only peer" type="radio" value="no" name="noice" id="noice_no">
                                <label
                                    class="text-[18px] w-[121px] h-[38px] flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('noice') ? 'bg-red-50 border' : '' }}"
                                    for="noice_no" style="font-family: 'Raleway'; display: flex; align-items: center;">No</label>
                            </div>
                        </div>
                        @error('noice')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col w-full md:w-1/3 mb-0 md:mb-6">
                    <div class="flex flex-col mb-6">
                        <label for="drug_yes"
                            class="{{ $errors->has('drugs') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-semibold text-gray-900 dark:text-gray-300">Drugs</label>
                        <div class="flex space-x-4">
                            <div class="relative w-1/3">

                                <input wire:model='drugs' class="sr-only peer" type="radio" value="yes" name="drugs" id="drug_yes">
                                <label
                                    class="text-[18px] w-[121px] h-[38px] flex justify-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('drugs') ? 'bg-red-50 border' : '' }}"
                                    for="drug_yes" style="font-family: 'Raleway'; display: flex; align-items: center;">Yes</label>
                            </div>

                            <div class="relative w-1/3">
                                <input wire:model='drugs' class="sr-only peer" type="radio" value="no" name="drugs" id="drug_no">
                                <label
                                    class="text-[18px] w-[121px] h-[38px] flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('drugs') ? 'bg-red-50 border' : '' }}"
                                    for="drug_no" style="font-family: 'Raleway'; display: flex; align-items: center;">No</label>
                            </div>
                        </div>
                        @error('drugs')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-6">
                        <label for="damage_of_property_yes"
                            class="{{ $errors->has('damageToProperty') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-semibold text-gray-900 dark:text-gray-300">Damage to
                            Property</label>
                        <div class="flex space-x-4">
                            <div class="relative w-1/3">

                                <input wire:model='damageToProperty'  class="sr-only peer" type="radio" value="yes" name="damage_of_property" id="damage_of_property_yes">
                                <label
                                    class="text-[18px] w-[121px] h-[38px] flex justify-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('damageToProperty') ? 'bg-red-50 border' : '' }}"
                                    for="damage_of_property_yes" style="font-family: 'Raleway'; display: flex; align-items: center;">Yes</label>
                            </div>

                            <div class="relative w-1/3">
                                <input wire:model='damageToProperty' class="sr-only peer" type="radio" value="no" name="damage_of_property" id="damage_of_property_no">
                                <label
                                    class="text-[18px] w-[121px] h-[38px] flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('damageToProperty') ? 'bg-red-50 border' : '' }}"
                                    for="damage_of_property_no" style="font-family: 'Raleway'; display: flex; align-items: center;">No</label>
                            </div>
                        </div>
                        @error('damageToProperty')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col w-full md:w-[270px] mb-0 md:mb-6">
                    <label for="other"
                        class="{{ $errors->has('other1') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-semibold text-gray-900 dark:text-gray-300">Other</label>
                    <textarea wire:model='other1' rows="6" id="other" class="w-full border-gray-500 rounded-md {{ $errors->has('other1') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}"
                        placeholder="Anything other comments you feel may be relevant"></textarea>
                    @error('other1')
                        <x-error message="{{ $message }}"></x-error>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end mt-10">
                <button type="button" wire:click='next'
                    class="text-white flex justify-center items-center bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-primary font-semibold rounded-lg text-[14px] w-[141px] h-[45px] px-5 py-2.5 text-center ">
                    <span class="mr-3">Continue</span> <x-arrow-icon></x-arrow-icon>
                </button>
            </div>
        </div>
    @endif

    @if ($step === 4)
        <div class="flex flex-col grow justify-between w-full h-full py-28 px-10"> 
            <h1 class="text-black font-bold text-[68px] leading-tight pb-[106px]">
                Do any of the following apply to {{ $this->tenantName }}?
            </h1>
            <div class="w-full flex flex-col md:flex-row justify-between">
                <div class="flex flex-col w-full md:w-1/3 mb-0 md:mb-6">
                    <div class="flex flex-col mb-6">
                        <label for="no_boiler_for_a_period_of_time_yes"
                            class="{{ $errors->has('noBoilerForAPeriodOfTime') ? 'text-red-700' : '' }} block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">No Boiler For A
                            Period Of Time</label>
                        <div class="flex space-x-4">
                            <div class="relative w-1/4">

                                <input wire:model='noBoilerForAPeriodOfTime' class="sr-only peer" type="radio" value="yes" name="no_boiler_for_a_period_of_time" id="no_boiler_for_a_period_of_time_yes">
                                <label
                                    class="flex justify-around w-full p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('noBoilerForAPeriodOfTime') ? 'bg-red-50 border' : '' }}"
                                    for="no_boiler_for_a_period_of_time_yes">Yes</label>
                            </div>

                            <div class="relative w-1/4">
                                <input wire:model='noBoilerForAPeriodOfTime' class="sr-only peer" type="radio" value="no" name="no_boiler_for_a_period_of_time" id="no_boiler_for_a_period_of_time_no">
                                <label
                                    class="flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('noBoilerForAPeriodOfTime') ? 'bg-red-50 border' : '' }}"
                                    for="no_boiler_for_a_period_of_time_no">No</label>
                            </div>
                        </div>
                        @error('noBoilerForAPeriodOfTime')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-6">
                        <label for="damp_yes"
                            class="{{ $errors->has('damp') ? 'text-red-700' : '' }} block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Damp
                            (Extreme)</label>
                        <div class="flex space-x-4">
                            <div class="relative w-1/4">

                                <input wire:model='damp' class="sr-only peer" type="radio" value="yes" name="damp" id="damp_yes">
                                <label
                                    class="flex justify-around w-full p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('damp') ? 'bg-red-50 border' : '' }}"
                                    for="damp_yes">Yes</label>
                            </div>

                            <div class="relative w-1/4">
                                <input wire:model='damp' class="sr-only peer" type="radio" value="no" name="damp" id="damp_no">
                                <label
                                    class="flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('damp') ? 'bg-red-50 border' : '' }}"
                                    for="damp_no">No</label>
                            </div>
                        </div>
                        @error('damp')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-6">
                        <label for="behavior_recorded_as_good_yes"
                            class="{{ $errors->has('behaviorRecordedAsGood') ? 'text-red-700' : '' }} block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Behaviour Recorded
                            As Good</label>
                        <div class="flex space-x-4">
                            <div class="relative w-1/4">

                                <input wire:model='behaviorRecordedAsGood' class="sr-only peer" type="radio" value="yes" name="behavior_recorded_as_good" id="behavior_recorded_as_good_yes">
                                <label
                                    class="flex justify-around w-full p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('behaviorRecordedAsGood') ? 'bg-red-50 border' : '' }}"
                                    for="behavior_recorded_as_good_yes">Yes</label>
                            </div>

                            <div class="relative w-1/4">
                                <input wire:model='behaviorRecordedAsGood' class="sr-only peer" type="radio" value="no" name="behavior_recorded_as_good" id="behavior_recorded_as_good_no">
                                <label
                                    class="flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('behaviorRecordedAsGood') ? 'bg-red-50 border' : '' }}"
                                    for="behavior_recorded_as_good_no">No</label>
                            </div>
                        </div>
                        @error('behaviorRecordedAsGood')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col w-full md:w-1/3 mb-0 md:mb-6">
                    <div class="flex flex-col mb-6">
                        <label for="bathroom_of_plumbing_issues_yes"
                            class="{{ $errors->has('bathroomOfPlumbingIssues') ? 'text-red-700' : '' }} block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Bathroom of
                            Plumbing Issues</label>
                        <div class="flex space-x-4">
                            <div class="relative w-1/4">

                                <input wire:model='bathroomOfPlumbingIssues'  class="sr-only peer" type="radio" value="yes" name="bathroom_of_plumbing_issues" id="bathroom_of_plumbing_issues_yes">
                                <label
                                    class="flex justify-around w-full p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('bathroomOfPlumbingIssues') ? 'bg-red-50 border' : '' }}"
                                    for="bathroom_of_plumbing_issues_yes">Yes</label>
                            </div>

                            <div class="relative w-1/4">
                                <input wire:model='bathroomOfPlumbingIssues'   class="sr-only peer" type="radio" value="no" name="bathroom_of_plumbing_issues" id="bathroom_of_plumbing_issues_no">
                                <label
                                    class="flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('bathroomOfPlumbingIssues') ? 'bg-red-50 border' : '' }}"
                                    for="bathroom_of_plumbing_issues_no">No</label>
                            </div>
                        </div>
                        @error('bathroomOfPlumbingIssues')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-6">
                        <label for="kitchin_issues_yes"
                            class="{{ $errors->has('kitchinIssues') ? 'text-red-700' : '' }} block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Kitchen
                            Issues</label>
                        <div class="flex space-x-4">
                            <div class="relative w-1/4">

                                <input wire:model='kitchinIssues'  class="sr-only peer" type="radio" value="yes" name="kitchin_issues" id="kitchin_issues_yes">
                                <label
                                    class="flex justify-around w-full p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('kitchinIssues') ? 'bg-red-50 border' : '' }}"
                                    for="kitchin_issues_yes">Yes</label>
                            </div>

                            <div class="relative w-1/4">
                                <input wire:model='kitchinIssues' class="sr-only peer" type="radio" value="no" name="kitchin_issues" id="kitchin_issues_no">
                                <label
                                    class="flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('kitchinIssues') ? 'bg-red-50 border' : '' }}"
                                    for="kitchin_issues_no">No</label>
                            </div>
                        </div>
                        @error('kitchinIssues')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col w-full md:w-[270px] mb-0 md:mb-6">
                    <label for="other"
                        class="{{ $errors->has('other2') ? 'text-red-700' : '' }} block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Other</label>
                    <textarea wire:model='other2' rows="6" id="other" name="other" class="w-full border-gray-500 {{ $errors->has('other2') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}"
                        placeholder="Anything other comments you feel may be relevant"></textarea>
                    @error('other2')
                        <x-error message="{{ $message }}"></x-error>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end mt-10">
                <button type="button" wire:click='next'
                    class="text-white flex justify-center items-center bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-primary font-semibold rounded-lg text-sm w-40 px-5 py-2.5 text-center "><span class="mr-3">Continue</span> <x-arrow-icon></x-arrow-icon></button>
            </div>
        </div>
    @endif

    @if ($step === 5)
        <div class="flex flex-col grow justify-between w-full h-full py-20 px-20">
            <div class="w-full flex flex-col justify-center">
                <h1 class="text-black font-bold text-[68px] font-heading leading-tight pb-[87px]">
                    Report sent!
                </h1>

                <p class="text-[#707070] text-[25px] leading-tight my-12" style="font-family: 'Raleway'; display: flex; align-items: center;">
                    Thanks for your submission, a member of our team will check it over and your report should be
                    live and searchable within the next 24 hours.
                </p>

                <div class="mt-[80px]">
                    <button type="button" wire:click='backToAccount'
                        class="text-white flex justify-center items-center bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-primary font-semibold rounded-lg text-[14px] w-[212px] h-[45px] px-5 py-2.5 text-center "><span class="mr-3">Back to my account</span> <x-arrow-icon></x-arrow-icon></button>
                </div>
            </div>

        </div>
    @endif
</div>
