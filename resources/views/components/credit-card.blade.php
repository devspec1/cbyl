<div class="flex flex-col lg:flex-row items-center p-6 bg-white m-4 rounded-md shadow">
    <div class="w-full lg:w-2/3">
        <form wire:ignore class="flex flex-col p-1 md:p-6">
            <div class="w-full md:w-3/6 flex flex-col">
                <div class="relative z-0 mb-6 group">
                    <label id="card-holder-name-label" for="small-input" class="block mb-2 text-sm font-bold text-gray-900">Cardholder name</label>
                    <input id="card-holder-name" placeholder="Name as it appears on your card" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary" />
                </div>
            </div>
            
            <div class="w-full flex flex-col md:flex-row justify-between">
                <div class="mb-6 w-full md:w-3/6 group">
                    <label for="small-input" class="block mb-2 text-sm font-bold text-gray-900">Credit card number</label>
                    <div class="cc-number block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary h-9">
                        <div id="cc-number"></div>
                    </div>
                </div>
                
                <div class="flex flex-row w-full md:w-3/6 justify-between">
                    <div class="relative z-0 mb-6 w-2/6 md:w-5/12  group md:ml-2">
                        <label for="expiry" class="block mb-2 text-sm font-bold text-gray-900">Expiry Date</label>
                        <div class="cc-exp block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary h-9">
                            <div id="expiry"></div>
                        </div>
                    </div>
                    <div class="relative z-0 mb-6 w-2/6 md:w-5/12 group">
                        <label for="cvct" class="block mb-2 text-sm font-bold text-gray-900">CVV</label>
                        <div class="cc-cvc block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary h-9">
                            <div id="cvc"></div>
                        </div>
                    </div>
                </div>
                {{-- error container --}}
                <div class="flex">
                    <div class="text-red-900" id="error-wrapper"></div>
                </div>
            </div>
        </form>
    </div>
    <div class="relative z-0 mb-6 w-full lg:w-1/3 group">
        <h2 class="font-bold text-left md:text-right">Total: <span class="text-xl">£{{ $this->plan_price }}</span></h2>
        <p class="text-xs text-gray-400 text-left md:text-right">Rebilled 12 months from now</p>
    </div>
</div>

<div class="flex justify-center w-full my-10">
    <button
        id='pay'
        type="submit"
        class="text-white bg-primary  hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-primary rounded-sm text-sm w-60 px-4 py-2 text-center md:mr-4 mx-4 flex justify-center items-center disabled:opacity-50"
    >
        <span id="stripe-loading-cc"><x-loading-icon></x-loading-icon></span>
        <span class="mr-5">Submit My Order</span><x-arrow-icon></x-arrow-icon>
    </button>
</div>
