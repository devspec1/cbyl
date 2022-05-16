<div class="p-3 mx-8">
    <div class="flex grow justify-between w-full h-full pt-5 md:pt-40 pb-3 md:pb-10">
        <div class="w-full md:w-5/12 flex flex-col justify-center">
            <h1 class="text-black font-bold font-heading text-[36px] leading-tight mb-4 md:text-[68px]">
                My Account
            </h1>
            <p>Settings</p>

            <div class="flex justify-center bg-gray-200 rounded-md my-10 shadow-md w-auto border text-sm md:text-md md:w-[435px]">
                <a href="#" wire:click='selectedTab("general")'
                    class="{{ $selectedTab === 'general' ? 'font-bold text-purple' : '' }} py-2 px-4 hover:text-fuchsia-900 cursor-pointer">General</a>
                <a href="#" wire:click='selectedTab("billing")'
                    class="{{ $selectedTab === 'billing' ? 'font-bold text-purple' : '' }} py-2 px-4 hover:text-fuchsia-900 cursor-pointer">Billing
                    History</a>
                <a href="#" wire:click='selectedTab("payment_method")'
                    class="{{ $selectedTab === 'payment_method' ? 'font-bold text-purple' : '' }} py-2 px-4 hover:text-fuchsia-900 cursor-pointer">Payment
                    Method</a>
            </div>
        </div>
    </div>
    @if ($selectedTab === 'general')
        <div class="flex grow justify-between w-full mb-40">

            <div class="w-full flex flex-col justify-center">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-2/5  md:m-0 md:mr-5">
                        <h1 class="font-bold text-xl leading-tight mb-4 text-purple">General</h1>
                        <form wire:submit.prevent='saveInformation' class="w-full p-4 my-5 rounded-md shadow bg-gray-300">
                            <div class="mb-6">
                                <label for="firstname"
                                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300 {{ $errors->has('firstName') ? 'text-red-500' : '' }}">Full Name</label>
                                <input wire:model='firstName' type="text" id="firstname"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-500 focus:border-fuchsia-500 block w-full p-2.5 {{ $errors->has('firstName') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                                @error('firstName')
                                    <x-error message="{{ $message }}"></x-error>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label for="email"
                                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300 {{ $errors->has('email') ? 'text-red-500' : '' }}">Email</label>
                                <input wire:model='email' type="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-500 focus:border-fuchsia-500 block w-full p-2.5 {{ $errors->has('email') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                                @error('email')
                                    <x-error message="{{ $message }}"></x-error>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label for="confirmEmail"
                                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300 {{ $errors->has('confirmEmail') ? 'text-red-500' : '' }}">Confirm Email</label>
                                <input wire:model='confirmEmail' type="email" id="confirmEmail"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-500 focus:border-fuchsia-500 block w-full p-2.5 {{ $errors->has('confirmEmail') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                                @error('confirmEmail')
                                    <x-error message="{{ $message }}"></x-error>
                                @enderror
                            </div>
                            <button type="submit"
                                class="flex items-center text-white bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto sm:w-auto px-5 py-2.5 text-center ">
                                <span wire:loading wire:target="saveInformation"><x-loading-icon></x-loading-icon></span> <span class="mr-3">Save Information</span> <x-arrow-icon></x-arrow-icon>
                            </button>
                        </form>
                    </div>
                    
                    <div class="w-full md:w-2/5 relative md:m-0 md:mr-5">
                        <h1 class="font-bold text-xl leading-tight mb-4 text-purple">Change Password</h1>
                        <form wire:submit.prevent='changePassword' class="rounded-md p-4 my-5 shadow bg-gray-300">
                            <div class="mb-6">
                                <label for="password"
                                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300 {{ $errors->has('password') ? 'text-red-500' : '' }}">Change
                                    Password</label>
                                <input wire:model='password' type="password" id="password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-500 focus:border-fuchsia-500 block w-full p-2.5 {{ $errors->has('password') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                                @error('password')
                                    <x-error message="{{ $message }}"></x-error>
                                @enderror
                            </div>
                            <div class="mb-6 pb-[95px]">
                                <label for="confirmPassword"
                                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300 {{ $errors->has('confirmPassword') ? 'text-red-500' : '' }}">Confirm
                                    Password</label>
                                <input wire:model='confirmPassword' type="password" id="confirmPassword"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-500 focus:border-fuchsia-500 block w-full p-2.5 {{ $errors->has('confirmPassword') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                                @error('confirmPassword')
                                    <x-error message="{{ $message }}"></x-error>
                                @enderror
                            </div>
                            <button type="submit"
                                class="relative flex items-center text-white bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto sm:w-auto px-5 py-2.5 text-center "><span wire:loading wire:target="changePassword"><x-loading-icon></x-loading-icon></span>
                                <span class="mr-3">Update Password</span> <x-arrow-icon></x-arrow-icon>
                            </button>
                        </form>
                    </div>
                    
                </div>

                <div class="w-full mt-20 mb-5">
                    <h2 class="text-2xl font-bold">Display your name and contact details on reports?</h2>
                    <div class="flex space-x-4 mt-6">
                        <div class="relative w-5/12 md:w-2/12">
                            <input @if($isDisplayYourNameOnReports !== null && $isDisplayYourNameOnReports) checked @endif wire:change='updateDisplayYourNameOnReports(1)' class="sr-only peer" type="radio" value="yes" name="display_your_name_on_reports" id="display_your_name_on_reports_yes">
                            <label
                                class="flex justify-around w-full p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-primary peer-checked:text-white peer-checked:border-transparent"
                                for="display_your_name_on_reports_yes">Yes</label>
                        </div>

                        <div class="relative w-5/12 md:w-2/12">
                            <input @if($isDisplayYourNameOnReports !== null && !$isDisplayYourNameOnReports) checked @endif wire:change='updateDisplayYourNameOnReports(0)' class="sr-only peer" type="radio" value="no" name="display_your_name_on_reports" id="display_your_name_on_reports_no">
                            <label
                                class="flex justify-around w-around p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:bg-primary peer-checked:text-white peer-checked:border-transparent"
                                for="display_your_name_on_reports_no">No</label>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-20 mb-5">
                    <h2 class="text-2xl font-bold">Remove your account?</h2>
                    <p>This will delete all account data.</p>
                    <p>This cannot be undone</p>

                    <button x-data="{}" @click="window.livewire.emitTo('confirmation-delete-user-modal', 'show')" type="button"
                        class="my-5 flex items-center text-white bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-60 sm:w-auto px-5 py-2.5 text-center ">
                        <span class="mr-3">Delete Account</span> <x-arrow-icon></x-arrow-icon>
                    </button>
                </div>
                <livewire:confirmation-delete-user-modal />
            </div>
        </div>
    @endif

    @if ($selectedTab === 'billing')
        <div class="flex grow justify-between w-full mb-40">

            <div class="w-full flex flex-col justify-center">
                <h1 class="text-purple font-bold text-xl leading-tight mb-4">
                    Billing History
                </h1>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-gray-300">
                    <h2 class="m-2 font-bold">Payments</h2>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Sale ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Description
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Vat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Payment amount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Payment Method
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Invoice
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                                <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{ $invoice->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $invoice->date()->toFormattedDateString() }}
                                    </td>
                                    <td class="px-6 py-4">
                                        1 Year subscription
                                    </td>
                                    <td class="px-6 py-4">
                                        0
                                    </td>
                                    <td class="px-6 py-4">
                                        0
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $invoice->amount_paid }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $invoice->status }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $invoice->owner()->defaultPaymentMethod()->card->brand }} 
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a target="_blank" href="/account/invoice/{{ $invoice->id }}" class="font-medium text-black dark:text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif

    @if ($selectedTab === 'payment_method' && !$isEditCurrentPaymentMethod)
        <div class="flex grow flex-col md:flex-row w-full mb-40 space-x-0 md:space-x-10">

            <div class="w-full md:w-2/5 flex flex-col justify-center">
                <h1 class="flex justify-between text-purple font-bold text-xl leading-tight mb-4">
                    Billing Information <a href="javascript:void(0);" x-data="{}"
                        @click="window.livewire.emitTo('billing-information-modal', 'show')"><svg
                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg></a>
                </h1>
                <p>Changes will be reflected on your next invoice</p>

                <div style="background: #ededed" class="w-full py-10 px-5 mt-5 rounded-lg shadow-md">
                    <table class="w-full">
                        <tr>
                            <td class="font-bold w-32">Name</td>
                            <td>{{ $firstName }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold w-32">Phone</td>
                            <td>{{ $phone }}</td>
                        </tr> 
                        <tr>
                            <td class="font-bold w-32">Business Name</td>
                            <td>{{ $businessName }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold w-32">Address Line 1</td>
                            <td>{{ $addressLine1 }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold w-32">Address Line 2</td>
                            <td>{{ $addressLine2 }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold w-32">City</td>
                            <td>{{ $city }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold w-32">Postcode</td>
                            <td>{{ $postCode }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="w-full md:w-2/5 mt-10 md:mt-0 flex flex-col justify-start">
                <h1 class="text-purple font-bold text-xl leading-tight mb-4">
                    Current Payment Method
                </h1>
                <p>For subscription payments.</p>

                <div class="w-full py-5">
                    <div class="w-full border shadow-md p-10 rounded-lg">
                        <div class="flex justify-between">
                            <span class="h-8 w-8">
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                <path strokeLinecap="round" strokeLinejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                              </svg>
                            </span>
                            <a href="#" wire:click='editCurrentPaymentMethod'>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                        </div>
                        <p>Mastercard ****{{ $paymentMethodlast4 ?: '' }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($selectedTab === 'payment_method' && $isEditCurrentPaymentMethod)
        <div class="flex grow flex-col md:flex-row w-full mb-20 space-x-0 md:space-x-10">

            <div class="w-full md:w-3/6 flex flex-col justify-center">
                <h1 class="flex justify-between text-fuchsia-900 font-bold text-xl leading-tight mb-4 text-purple">
                    Update credit card info
                </h1>
                <div class="w-full py-10 px-5 mt-5 bg-gray-100 rounder-lg shadow-md">
                    <form wire:ignore class="flex flex-col p-1 md:p-6">
                        <div class="w-full md:w-3/6 flex flex-col">
                            <div class="relative z-0 mb-6 group">
                                <label id="card-holder-name-label" for="small-input" class="block mb-2 text-sm font-bold text-gray-900">Cardholder name</label>
                                <input id="card-holder-name" placeholder="Name as it appears on your card" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-purple-500 focus:border-purple-500" />
                            </div>
                        </div>
                        
                        <div class="w-full flex flex-col md:flex-row justify-between">
                            <div class="mb-6 w-full md:w-3/6 group">
                                <label for="small-input" class="block mb-2 text-sm font-bold text-gray-900">Credit card number</label>
                                <div class="cc-number block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-purple-500 focus:border-purple-500 h-9">
                                    <div id="cc-number"></div>
                                </div>
                            </div>
                            
                            <div class="flex flex-row justify-between md:w-3/6">
                                <div class="relative z-0 mb-6 w-2/6 md:w-3/6  group md:px-1">
                                    <label for="expiry" class="block mb-2 text-sm font-bold text-gray-900">Expiry Date</label>
                                    <div class="cc-exp block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-purple-500 focus:border-purple-500 h-9">
                                        <div id="expiry"></div>
                                    </div>
                                </div>
                                <div class="md:px-1 relative z-0 mb-6 w-2/6 md:w-3/6 group">
                                    <label for="cvct" class="block mb-2 text-sm font-bold text-gray-900">CVV</label>
                                    <div class="cc-cvc block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-purple-500 focus:border-purple-500 h-9">
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
            </div>            
        </div>

        <div class="flex flex-row space-x-4 my-5 mb-20">
            <button
                id='pay'
                type="submit"
                data-secret="{{ $client_secret }}"
                class="text-white bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-1/4 sm:w-auto px-5 py-2.5 text-center ">
                <span id="stripe-loading-cc" class="hidden"><x-loading-icon></x-loading-icon></span>
                Save
            </button>
            <button wire:click='cancelEditPaymentMethod' type="button"
                class="w-1/4 text-gray-900 bg-gray-300 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center">Cancel
            </button>
        </div>
        
        <script>
            var style = {
                base: {
                    iconColor: '#666EE8',
                    color: '#31325F',
                    fontWeight: 300,
                    fontSize: '15px',

                    '::placeholder': {
                        color: '#CFD7E0',
                    },
                },
            };

            // const paymentMethod = "";
            // console.log('paymentMethod', paymentMethod);
            const stripe = Stripe("{{ config('services.stripe.key') }}", { locale: 'en' }); // Create a Stripe client.
            const elements = stripe.elements();

            // Stripe elements
            const cardNumberElement = elements.create('cardNumber', { style });
            cardNumberElement.mount('#cc-number');

            const cardExpiryElement = elements.create('cardExpiry', { style });
            cardExpiryElement.mount('#expiry');

            const cardCvcElement = elements.create('cardCvc', { style });
            cardCvcElement.mount('#cvc');

            // form elements
            const cardButton = document.getElementById('pay');
            const cardHolderName = document.getElementById('card-holder-name');
            const loadingIcon = document.getElementById('stripe-loading-cc');
            const clientSecret =  "{{ $client_secret }}";
            
            loadingIcon.style.display = 'none';

            var cardButtonHandler = async (e) => {
                e.stopPropagation();

                cardButton.disabled = true;
                loadingIcon.style.display = 'inline-block';
                console.log('here...');
                if (!cardHolderName.value) {
                    const label = document.getElementById('card-holder-name-label');
                    label.classList.add('text-red-700');

                    cardHolderName.className += ' bg-red-50 border border-red-700 text-red-900 placeholder-red-700';
                    cardButton.disabled = false;
                    loadingIcon.style.display = 'none';
                    toastr.error('Incomplete card details!')
                    return;
                } else {
                    const label = document.getElementById('card-holder-name-label');
                    label.className = 'block mb-2 text-sm font-medium text-gray-900';

                    cardHolderName.className = 'block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary';
                }

                const {setupIntent, error} = await stripe.confirmCardSetup(clientSecret, {
                    payment_method: {
                        card: cardNumberElement,
                        billing_details: {
                            name: cardHolderName.value
                        },
                    },
                });

                if (error) {
                    const errorWrapper = document.getElementById('error-wrapper');
                    cardButton.disabled = false;
                    loadingIcon.style.display = 'none';
                    toastr.error(error.message || 'Something went wrong!')
                } else {
                    @this.set('stripeToken', setupIntent.payment_method);
                }
                return false;
            };

            cardButton.addEventListener('click', cardButtonHandler);

            window.addEventListener('change-payment-method', () => {
                loadingIcon.style.display = 'none';
                cardButton.disabled = false;

                const label = document.getElementById('card-holder-name-label');
                label.className = 'block mb-2 text-sm font-medium text-gray-900';

                cardHolderName.className = 'block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary';
            })
        </script>
    @endif

    <livewire:billing-information-modal />
</div>

