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
        <div class="flex flex-col grow justify-between w-full h-full py-10 md:py-28 md:px-10">
            <h1 class="text-black font-bold text-[30px] md:text-[68px] font-heading leading-tight pb-8 md:pb-[106px]">
                Reasons for adding {{ $this->tenantName }}
            </h1>
            <div class="w-full flex flex-col md:flex-row justify-between">
                <div class="flex flex-col  mb-0 md:mb-6">
                    <div class="flex flex-col mb-6">
                        <label for="none_payment_of_rent_yes" class="{{ $errors->has('nonePaymentOfRent') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-semibold text-gray-900">None Payment of Rent</label>
                        <div class="flex space-x-4">
                            <div class="relative w-3/5">
                                <input wire:model='nonePaymentOfRent' class="sr-only peer" type="radio" value="yes" name="none_payment_of_rent" id="none_payment_of_rent_yes">
                                <label
                                    class="text-[18px] w-[110px] h-[38px] flex justify-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('nonePaymentOfRent') ? 'bg-red-50 border' : '' }}"
                                    for="none_payment_of_rent_yes" style="font-family: 'Raleway'; display: flex; align-items: center;">Yes</label>
                            </div>

                            <div class="relative w-3/5">
                                <input wire:model='nonePaymentOfRent' class="sr-only peer" type="radio" value="no" name="none_payment_of_rent" id="none_payment_of_rent_no">
                                <label
                                    class="text-[18px] w-[110px] h-[38px] flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('nonePaymentOfRent') ? 'bg-red-50 border' : '' }}"
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
                            <div class="relative w-3/5">

                                <input wire:model='noice' class="sr-only peer" type="radio" value="yes" name="noice" id="noice_yes">
                                <label
                                    class="text-[18px] w-[110px] h-[38px] flex justify-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('noice') ? 'bg-red-50 border' : '' }}"
                                    for="noice_yes" style="font-family: 'Raleway'; display: flex; align-items: center;">Yes</label>
                            </div>

                            <div class="relative w-3/5">
                                <input wire:model='noice' class="sr-only peer" type="radio" value="no" name="noice" id="noice_no">
                                <label
                                    class="text-[18px] w-[110px] h-[38px] flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('noice') ? 'bg-red-50 border' : '' }}"
                                    for="noice_no" style="font-family: 'Raleway'; display: flex; align-items: center;">No</label>
                            </div>
                        </div>
                        @error('noice')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col  mb-0 md:mb-6">
                    <div class="flex flex-col mb-6">
                        <label for="damage_of_property_yes"
                            class="{{ $errors->has('damageToProperty') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-semibold text-gray-900 dark:text-gray-300">Damage to
                            the Property</label>
                        <div class="flex space-x-4">
                            <div class="relative w-3/5">

                                <input wire:model='damageToProperty'  class="sr-only peer" type="radio" value="yes" name="damage_of_property" id="damage_of_property_yes">
                                <label
                                    class="text-[18px] w-[110px] h-[38px] flex justify-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('damageToProperty') ? 'bg-red-50 border' : '' }}"
                                    for="damage_of_property_yes" style="font-family: 'Raleway'; display: flex; align-items: center;">Yes</label>
                            </div>

                            <div class="relative w-3/5">
                                <input wire:model='damageToProperty' class="sr-only peer" type="radio" value="no" name="damage_of_property" id="damage_of_property_no">
                                <label
                                    class="text-[18px] w-[110px] h-[38px] flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('damageToProperty') ? 'bg-red-50 border' : '' }}"
                                    for="damage_of_property_no" style="font-family: 'Raleway'; display: flex; align-items: center;">No</label>
                            </div>
                        </div>
                        @error('damageToProperty')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                    
                    <div class="flex flex-col mb-6">
                        <label for="termsOfLeaseBroken_yes"
                            class="{{ $errors->has('termsOfLeaseBroken') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-semibold text-gray-900 dark:text-gray-300">Terms of Lease Broken</label>
                        <div class="flex space-x-4">
                            <div class="relative w-3/5">

                                <input wire:model='termsOfLeaseBroken' class="sr-only peer" type="radio" value="yes" name="termsOfLeaseBroken" id="termsOfLeaseBroken_yes">
                                <label
                                    class="text-[18px] w-[110px] h-[38px] flex justify-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('termsOfLeaseBroken') ? 'bg-red-50 border' : '' }}"
                                    for="termsOfLeaseBroken_yes" style="font-family: 'Raleway'; display: flex; align-items: center;">Yes</label>
                            </div>

                            <div class="relative w-3/5">
                                <input wire:model='termsOfLeaseBroken' class="sr-only peer" type="radio" value="no" name="termsOfLeaseBroken" id="termsOfLeaseBroken_no">
                                <label
                                    class="text-[18px] w-[110px] h-[38px] flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('termsOfLeaseBroken') ? 'bg-red-50 border' : '' }}"
                                    for="termsOfLeaseBroken_no" style="font-family: 'Raleway'; display: flex; align-items: center;">No</label>
                            </div>
                        </div>
                        @error('termsOfLeaseBroken')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col  mb-0 md:mb-6">
                    <div class="flex flex-col mb-6">
                        <label for="antiSocialBehaviour_yes"
                            class="{{ $errors->has('antiSocialBehaviour') ? 'text-red-700' : '' }} block mb-2 text-[17px] font-semibold text-gray-900 dark:text-gray-300">Anti-Social Behaviour</label>
                        <div class="flex space-x-4">
                            <div class="relative w-3/5">

                                <input wire:model='antiSocialBehaviour'  class="sr-only peer" type="radio" value="yes" name="antiSocialBehaviour" id="antiSocialBehaviour_yes">
                                <label
                                    class="text-[18px] w-[110px] h-[38px] flex justify-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('antiSocialBehaviour') ? 'bg-red-50 border' : '' }}"
                                    for="antiSocialBehaviour_yes" style="font-family: 'Raleway'; display: flex; align-items: center;">Yes</label>
                            </div>

                            <div class="relative w-3/5">
                                <input wire:model='antiSocialBehaviour' class="sr-only peer" type="radio" value="no" name="antiSocialBehaviour" id="antiSocialBehaviour_no">
                                <label
                                    class="text-[18px] w-[110px] h-[38px] flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('antiSocialBehaviour') ? 'bg-red-50 border' : '' }}"
                                    for="antiSocialBehaviour_no" style="font-family: 'Raleway'; display: flex; align-items: center;">No</label>
                            </div>
                        </div>
                        @error('antiSocialBehaviour')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex justify-start md:justify-end md:mt-10 mb-12 md:mb-0">
                <button type="button" wire:click='next'
                    class="text-white flex justify-center items-center bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-primary font-semibold rounded-lg text-[14px] w-[141px] h-[45px] px-5 py-2.5 text-center ">
                    <span class="mr-3">Continue</span> <x-arrow-icon></x-arrow-icon>
                </button>
            </div>
        </div>
    @endif

    @if ($step === 3)
        <div class="flex flex-col grow justify-between w-full h-full py-10 md:py-28 md:px-10"> 
            <h1 class="text-black font-bold text-[30px] md:text-[68px] leading-tight pb-8 md:pb-[106px]">
                Do any of the following apply to {{ $this->tenantName }}?
            </h1>
            <div class="w-full flex flex-col md:flex-row justify-between">
                <div class="flex flex-col  mb-0 md:mb-6">
                    <div class="flex flex-col mb-6">
                        <label for="no_boiler_for_a_period_of_time_yes"
                            class="text-[18px] {{ $errors->has('noBoilerForAPeriodOfTime') ? 'text-red-700' : '' }} block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">No Boiler For A Period Of Time</label>
                        <div class="flex space-x-4">
                            <div class="relative w-3/5">

                                <input wire:model='noBoilerForAPeriodOfTime' class="sr-only peer" type="radio" value="yes" name="no_boiler_for_a_period_of_time" id="no_boiler_for_a_period_of_time_yes">
                                <label
                                    class="flex justify-around items-center text-[18px] w-[110px] h-[38px] p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('noBoilerForAPeriodOfTime') ? 'bg-red-50 border' : '' }}"
                                    for="no_boiler_for_a_period_of_time_yes">Yes</label>
                            </div>

                            <div class="relative w-3/5">
                                <input wire:model='noBoilerForAPeriodOfTime' class="sr-only peer" type="radio" value="no" name="no_boiler_for_a_period_of_time" id="no_boiler_for_a_period_of_time_no">
                                <label
                                    class="flex justify-around items-center text-[18px] w-[110px] h-[38px] p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('noBoilerForAPeriodOfTime') ? 'bg-red-50 border' : '' }}"
                                    for="no_boiler_for_a_period_of_time_no">No</label>
                            </div>
                        </div>
                        @error('noBoilerForAPeriodOfTime')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-6">
                        <label for="damp_yes"
                            class="text-[18px] {{ $errors->has('damp') ? 'text-red-700' : '' }} block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Damp (Extreme)</label>
                        <div class="flex space-x-4">
                            <div class="relative w-3/5">

                                <input wire:model='damp' class="sr-only peer" type="radio" value="yes" name="damp" id="damp_yes">
                                <label
                                    class="flex justify-around items-center text-[18px] w-[110px] h-[38px] p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('damp') ? 'bg-red-50 border' : '' }}"
                                    for="damp_yes">Yes</label>
                            </div>

                            <div class="relative w-3/5">
                                <input wire:model='damp' class="sr-only peer" type="radio" value="no" name="damp" id="damp_no">
                                <label
                                    class="flex justify-around items-center text-[18px] w-[110px] h-[38px] p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('damp') ? 'bg-red-50 border' : '' }}"
                                    for="damp_no">No</label>
                            </div>
                        </div>
                        @error('damp')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col  mb-0 md:mb-6">
                    <div class="flex flex-col mb-6">
                        <label for="bathroom_of_plumbing_issues_yes"
                            class="text-[18px] {{ $errors->has('bathroomOfPlumbingIssues') ? 'text-red-700' : '' }} block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Bathroom of Plumbing Issues</label>
                        <div class="flex space-x-4">
                            <div class="relative w-3/5">

                                <input wire:model='bathroomOfPlumbingIssues'  class="sr-only peer" type="radio" value="yes" name="bathroom_of_plumbing_issues" id="bathroom_of_plumbing_issues_yes">
                                <label
                                    class="flex justify-around items-center text-[18px] w-[110px] h-[38px] p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('bathroomOfPlumbingIssues') ? 'bg-red-50 border' : '' }}"
                                    for="bathroom_of_plumbing_issues_yes">Yes</label>
                            </div>

                            <div class="relative w-3/5">
                                <input wire:model='bathroomOfPlumbingIssues'   class="sr-only peer" type="radio" value="no" name="bathroom_of_plumbing_issues" id="bathroom_of_plumbing_issues_no">
                                <label
                                    class="flex justify-around items-center text-[18px] w-[110px] h-[38px] p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('bathroomOfPlumbingIssues') ? 'bg-red-50 border' : '' }}"
                                    for="bathroom_of_plumbing_issues_no">No</label>
                            </div>
                        </div>
                        @error('bathroomOfPlumbingIssues')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-6">
                        <label for="kitchin_issues_yes"
                            class="text-[18px] {{ $errors->has('kitchinIssues') ? 'text-red-700' : '' }} block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Kitchen Issues</label>
                        <div class="flex space-x-4">
                            <div class="relative w-3/5">

                                <input wire:model='kitchinIssues'  class="sr-only peer" type="radio" value="yes" name="kitchin_issues" id="kitchin_issues_yes">
                                <label
                                    class="flex justify-around items-center text-[18px] w-[110px] h-[38px] p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('kitchinIssues') ? 'bg-red-50 border' : '' }}"
                                    for="kitchin_issues_yes">Yes</label>
                            </div>

                            <div class="relative w-3/5">
                                <input wire:model='kitchinIssues' class="sr-only peer" type="radio" value="no" name="kitchin_issues" id="kitchin_issues_no">
                                <label
                                    class="flex justify-around items-center text-[18px] w-[110px] h-[38px] p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('kitchinIssues') ? 'bg-red-50 border' : '' }}"
                                    for="kitchin_issues_no">No</label>
                            </div>
                        </div>
                        @error('kitchinIssues')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col  mb-0 md:mb-6">
                    <div class="flex flex-col mb-6">
                        <label for="behavior_recorded_as_good_yes"
                            class="text-[18px] {{ $errors->has('behaviorRecordedAsGood') ? 'text-red-700' : '' }} block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Behaviour Recorded As Good</label>
                        <div class="flex space-x-4">
                            <div class="relative w-3/5">

                                <input wire:model='behaviorRecordedAsGood' class="sr-only peer" type="radio" value="yes" name="behavior_recorded_as_good" id="behavior_recorded_as_good_yes">
                                <label
                                    class="flex justify-around items-center text-[18px] w-[110px] h-[38px] p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('behaviorRecordedAsGood') ? 'bg-red-50 border' : '' }}"
                                    for="behavior_recorded_as_good_yes">Yes</label>
                            </div>

                            <div class="relative w-3/5">
                                <input wire:model='behaviorRecordedAsGood' class="sr-only peer" type="radio" value="no" name="behavior_recorded_as_good" id="behavior_recorded_as_good_no">
                                <label
                                    class="flex justify-around items-center text-[18px] w-[110px] h-[38px] p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-et-s peer-checked:text-white peer-checked:border-transparent {{ $errors->has('behaviorRecordedAsGood') ? 'bg-red-50 border' : '' }}"
                                    for="behavior_recorded_as_good_no">No</label>
                            </div>
                        </div>
                        @error('behaviorRecordedAsGood')
                            <x-error message="{{ $message }}"></x-error>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex justify-start md:justify-end md:mt-10 mb-12 md:mb-0">
                <button type="button" wire:click='next'
                    class="text-white flex justify-center items-center bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-primary font-semibold rounded-lg text-sm w-40 px-5 py-2.5 text-center "><span class="mr-3">Continue</span> <x-arrow-icon></x-arrow-icon></button>
            </div>
        </div>
    @endif

    @if ($step === 4)
        <div class="flex flex-col grow justify-between w-full h-full py-10 md:py-20 md:px-20">
            <div class="w-full flex flex-col justify-center">
                @if ($result === 1 || $result === 2)
                <h1 class="text-black font-bold text-[30px] md:text-[68px] font-heading leading-tight pb-[87px]">
                    Report published!
                </h1>
                @endif
                @if ($result === 3)
                <h1 class="text-black font-bold text-[30px] md:text-[68px] font-heading leading-tight pb-[87px]">
                    Report not published.
                </h1>
                @endif

                @if ($result === 1)
                <p class="text-[#707070] text-[25px] leading-tight my-12" style="font-family: 'Raleway'; display: flex; align-items: center;">
                    Thank you for submitting your report.<br><br>
                    We’re pleased to say that it’s now available to search.<br><br>
                    Your contribution is appreciated and helps good tenants and landlords alike.<br>
                </p>
                @endif

                @if ($result === 2)
                <p class="text-[#707070] text-[25px] leading-tight my-12" style="font-family: 'Raleway'; display: flex; align-items: center;">
                    Thank you for submitting your report.<br><br>
                    We’re pleased to say that it’s now available to search.<br><br>
                    Your contribution is vital to help landlords pick the right tenant first-time.<br>
                </p>
                @endif

                @if ($result === 3)
                <p class="text-[#707070] text-[25px] leading-tight my-12" style="font-family: 'Raleway'; display: flex; align-items: center;">
                    Sorry but your report doesn’t meet our conditions for publication.<br><br>
                    We’re unable to publish your report at this time.<br>
                </p>
                @endif

                <div class="mt-[80px]">
                    <button type="button" wire:click='backToAccount'
                        class="text-white flex justify-center items-center bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-primary font-semibold rounded-lg text-[14px] w-[212px] h-[45px] px-5 py-2.5 text-center "><span class="mr-3">Back to my account</span> <x-arrow-icon></x-arrow-icon></button>
                </div>
            </div>

        </div>
    @endif
</div>
