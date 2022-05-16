<h1 class="text-3xl py-2 font-extrabold text-center">
    You're almost there...
</h1>

<div class="flex flex-col items-center p-6 pb-0">
    <div class="w-full grid xl:grid-cols-2 xl:gap-6">
        <div class="flex flex-col">
            <label for="small-input" class="block mb-2 pl-2 text-secondary">Payment method</label>
            <div class="relative z-0 mb-6 w-full group flex bg-white rounded-md shadow h-10">
                {{-- <div class="flex items-center mx-5">
                    <input wire:change='changePaymentMethod("paypal")' id="paypal" type="radio" name="countries" value="USA" class="border-gray-300 focus:ring-2 focus:ring-blue-300 " aria-labelledby="country-option-1" aria-describedby="country-option-1" checked>
                    <label for="paypal" class="block ml-2 text-sm font-medium text-gray-900">
                        Paypal
                    </label>
                </div> --}}

                <div class="flex items-center mx-5">
                    <input wire:change='changePaymentMethod("credit_card")' id="credit-card" type="radio" name="countries" value="USA" class="border-gray-300 focus:ring-2 focus:ring-blue-300 " aria-labelledby="country-option-1" aria-describedby="country-option-1" checked>
                    <label for="credit-card" class="block ml-2 text-sm font-medium text-gray-900">
                        Credit Card
                    </label>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <label for="small-input" class="block mb-2 pl-2 text-secondary">Coupon code?</label>
            <div class="relative z-0 mb-6 w-full group flex bg-white rounded-md shadow h-10">
                <input @disabled($couponApplied) wire:model='couponCode' type="text" id="website-admin" class="rounded-none rounded-l-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5 disabled:bg-slate-300">
                <button @disabled($couponApplied) wire:click.prevent='applyCoupon' class="inline-flex items-center px-3 text-sm text-white bg-secondary hover:bg-opacity-90 rounded-r-md hover:cursor-pointer border border-l-0 border-gray-300 disabled:opacity-50 disabled:cursor-not-allowed ">
                    <span wire:loading wire:target='applyCoupon'><x-loading-icon></x-loading-icon></span>Apply
                </button>
            </div>
        </div>
    </div>
</div>


<div class="{{ $paymentMethod !== 'credit_card' ? 'block' : 'hidden'}} ">
    <div class="flex flex-col md:flex-row items-center p-6 bg-white m-4 rounded-md shadow">
        <div class="w-full md:w-2/3">
            {{-- @include('components.paypal') --}}
        </div>
        <div class="relative z-0 mb-6 w-full md:w-1/3 group">
            <h2 class="font-bold text-right">Total: <span class="text-xl">£{{ $this->plan_price }}</span></h2>
            <p class="text-xs text-gray-400 text-right">Rebilled 12 months from now</p>
        </div>
    </div>

    <div wire:ignore class="flex justify-center w-full my-10">
        <button
            class="text-white bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-primary rounded-sm text-sm w-auto px-4 py-2 text-center md:mr-4 mx-4 flex justify-center items-center disabled:opacity-50"
        >
            {{-- <span id="stripe-loading"><x-loading-icon></x-loading-icon></span> --}}
            <span class="mr-3">Submit My Order</span> <x-arrow-icon></x-arrow-icon></button>
        </button>
    </div>
</div>
<div class="{{ $paymentMethod === 'credit_card' ? 'block' : 'hidden'}}">
    @include('components.credit-card')
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

    const paymentMethod = "{{ $paymentMethod }}";
    console.log('paymentMethod', paymentMethod);
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
        if (paymentMethod === 'paypal') {
            console.log(`payment_method is ${paymentMethod}`);
            return;
        }

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
        }, {
            handleActions: false
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