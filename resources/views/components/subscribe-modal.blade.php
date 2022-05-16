@props(['currentStep' => 1, 'paymentMethod' => 'credit_card'])

<x-modal class="bg-gray-100 w-2/4 relative" trigger="showSubscribeDialog">
    <div class="w-full flex justify-between items-center absolute top-0 left-0 px-4 py-2">
        <a href="#" class="flex">
            <svg class="w-6 h-6 dark:text-gray-500 mr-1 hover:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path></svg>
            Back

        </a>

        <a href="#" class="rounded-full bg-gray-200 hover:bg-gray-300">
            <svg class="w-6 h-6 text-gray-500 p-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </a>
    </div>
    <div class="w-1/3 m-auto py-6">
        <div class="flex">
            <div class="w-1/3">
                <div class="relative mb-2">
                    <div class="w-10 h-10 mx-auto {{ $currentStep === 1 ? 'bg-primary' : 'bg-gray-400' }} rounded-full text-lg text-center text-white flex items-center">
                        <span class="text-center text-white w-full hover:cursor-pointer">
                            1
                        </span>
                    </div>
                </div>

                <div class="text-xs text-center md:text-base">Account</div>
            </div>

            <div class="w-1/3">
                <div class="relative mb-2">
                    <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 3rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                            <div class="w-0 bg-gray-400 pb-1 rounded" style="width: 100%;"></div>
                        </div>
                    </div>

                    <div class="w-10 h-10 mx-auto {{ $currentStep === 2 ? 'bg-primary' : 'bg-gray-400' }} rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-white w-full hover:cursor-pointer">
                            2
                        </span>
                    </div>
                </div>

                <div class="text-xs text-center md:text-base">Cart</div>
            </div>

            
            <div class="w-1/3">
                <div class="relative mb-2">
                    <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 3rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="w-full bg-gray-400 rounded items-center align-middle align-center flex-1">
                            <div class="w-0 bg-purple-300 pb-1 rounded" style="width: 0%;"></div>
                        </div>
                    </div>

                    <div class="hover:bg-purple-700 w-10 h-10 mx-auto {{ $currentStep === 3 ? 'bg-primary' : 'bg-gray-400' }} border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-white w-full hover:cursor-pointer ">
                            3
                        </span>
                    </div>
                </div>

                <div class="text-xs text-center md:text-base">Billing</div>
            </div>
        </div>
    </div>
    

    <form wire:submit.prevent="subscribe" class="mb-10">
        @if ($currentStep === 1)
            <h1 class="text-3xl py-2 font-extrabold text-center">
                Create your account
            </h1>
            <p class="text-center py-2">Already registered? <a href="#" class="text-primary">Log in here</a></p>

            <div class="flex flex-col items-center p-6 bg-white m-4 rounded-md shadow">
                <div class="w-full grid xl:grid-cols-2 xl:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">First name</label>
                        <input type="text" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary">
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Last name</label>
                        <input type="text" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary">
                    </div>
                </div>
                <div class="w-full grid xl:grid-cols-2 xl:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="text" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary">
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Confirm Email</label>
                        <input type="text" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary">
                    </div>
                </div>
                <div class="w-full grid xl:grid-cols-2 xl:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="text" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary">
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
                        <input type="text" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary">
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center mb-4">
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 text-primary bg-gray-100 rounded border-gray-300 focus:ring-primary" checked>
                <label for="checkbox-1" class="ml-3 text-sm text-gray-900">I have read and agreed to the <a href="#" class="text-secondary hover:underline">terms and services</a></label>
            </div>
        @endif

        @if ($currentStep === 2)
            <h1 class="text-3xl py-2 font-extrabold text-center">
                Protect Yourself Today
            </h1>

            <div class="flex items-center justify-between p-6 my-6 bg-white m-4 rounded-2xl shadow">
                <div>
                    <h2 class="text-gray-900">Standard Subscription</h2>
                    <p class="text-gray-500 text-xs">Up to 10 searches per year, unlimited reporting</p>
                </div>
                <div class="text-gray-900">
                    £30
                </div>
            </div>

            <div class="flex items-center justify-between p-6 my-6 bg-white m-4 rounded-2xl shadow">
                <div>
                    <h2 class="text-gray-900">Agency Subscription</h2>
                    <p class="text-gray-500 text-xs">Unlimited searches, unlimited reporting</p>
                </div>
                <div class="text-gray-900">
                    £70
                </div>
            </div>

            <div class="mb-10 mx-4">
                <p class="text-right text-gray-500">Total: £30</p>
                <p class="text-right text-gray-500 mb-6">Inc. vat</p>
                <p class="text-right text-gray-500">Use code "LAUNCH" to get 50% off at Checkout!</p>
            </div>
        @endIf

        @if ($currentStep === 3)
            <h1 class="text-3xl py-2 font-extrabold text-center">
                You're almost there...
            </h1>

            <div class="flex flex-col items-center p-6 pb-0">
                <div class="w-full grid xl:grid-cols-2 xl:gap-6">
                    <div class="flex flex-col">
                        <label for="small-input" class="block mb-2 pl-2 text-secondary">Payment method</label>
                        <div class="relative z-0 mb-6 w-full group flex bg-white rounded-md shadow h-10">
                            <div class="flex items-center mx-5">
                                <input wire:change='changePaymentMethod("paypal")' id="paypal" type="radio" name="countries" value="USA" class="border-gray-300 focus:ring-2 focus:ring-blue-300 " aria-labelledby="country-option-1" aria-describedby="country-option-1" checked>
                                <label for="paypal" class="block ml-2 text-sm font-medium text-gray-900">
                                    Paypal
                                </label>
                            </div>

                            <div class="flex items-center mx-5">
                                <input wire:change='changePaymentMethod("credit_card")' id="credit-card" type="radio" name="countries" value="USA" class="border-gray-300 focus:ring-2 focus:ring-blue-300 " aria-labelledby="country-option-1" aria-describedby="country-option-1" checked>
                                <label for="credit-card" class="block ml-2 text-sm font-medium text-gray-900">
                                    Credit Card
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <label for="small-input" class="block mb-2 pl-2 text-sky-700">Coupon code?</label>
                        <div class="relative z-0 mb-6 w-full group flex bg-white rounded-md shadow h-10">
                            
                            <input type="text" id="website-admin" class="rounded-none rounded-l-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5">
                            <span class="inline-flex items-center px-3 text-sm text-white bg-primary hover:bg-opacity-90 rounded-r-md hover:cursor-pointer border border-l-0 border-gray-300">
                                Apply
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-row items-center p-6 bg-white m-4 rounded-md shadow">
                <div class="w-2/3">
                    @if ($paymentMethod !== 'credit_card')
                        <div class="w-full grid xl:grid-cols-2 xl:gap-6">
                            <div class="relative z-0 mb-6 group">
                                <label for="small-input" class="block mb-2 text-xs text-gray-900">Click here to sign up with paypal</label>
                                <button type="button" class="w-full text-gray-900 bg-[#F7BE38] hover:bg-[#F7BE38]/90 focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-medium rounded-sm text-center text-sm px-5 py-2.5 items-center dark:focus:ring-[#F7BE38]/50 mr-2 mb-2">
                                    PayPal
                                </button>
                            </div>
                        </div>
                    @else
                        <div class="w-full grid xl:grid-cols-2 xl:gap-6">
                            <div class="relative z-0 mb-6 group">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Cardholder name</label>
                                <input type="text" placeholder="Name as it appears on your card" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary">
                            </div>
                        </div>
                        <div class="w-full grid xl:grid-cols-2 xl:gap-6">
                            <div class="relative z-0 mb-6 w-full group">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Credit card number</label>
                                <input type="text" placeholder="4111 1111 1111 1111" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary">
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                <div class="w-full grid xl:grid-cols-2 xl:gap-2">
                                    <div class="relative z-0 mb-6 w-full group">
                                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Expiry Date</label>
                                        <input type="text" placeholder="10/2022" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary">
                                    </div>
                                    <div class="relative z-0 mb-6 w-full group">
                                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">CVV</label>
                                        <input type="text" placeholder="123" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="relative z-0 mb-6 w-1/3 group">
                    <h2 class="font-bold text-right">Total: <span class="text-xl">£30</span></h2>
                    <p class="text-xs text-gray-400 text-right">Rebilled 12 months from now</p>
                </div>
            </div>
        @endIf

        @if ($currentStep <= 2)
        <div class="flex justify-end w-full">
            <button wire:click='nextStep()' type="submit" class="text-white flex bg-purple-700 hover:bg-primary focus:ring-4 focus:outline-none focus:ring-purple-300 rounded-sm text-sm w-full sm:w-auto px-4 py-2 text-center mr-4">Continue <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg></button>
        </div>
        @else
        <div class="flex justify-center w-full mt-10">
            <button wire:click='submitOrder()' type="submit" class="text-white flex bg-purple-700 hover:bg-primary focus:ring-4 focus:outline-none focus:ring-purple-300 rounded-sm text-sm w-full sm:w-auto px-4 py-2 text-center mr-4">Submit My Order <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg></button>
        </div>
        @endif
    </form>
</x-modal>