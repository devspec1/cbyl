<x-app-layout>
    <div class="flex flex-col bg-white w-full h-screen">
        <div class="flex flex-col items-center h-screen">
            <div class="flex grow container justify-between w-full min-h-screen">
                <div class="w-4/12 flex flex-col justify-center">
                    <h1 class="text-black font-bold text-7xl leading-tight mb-4">
                        Get the<br/>
                        <span class="text-purple-900">Right Tenant</span><br/>
                        first time!
                    </h1>

                    <p class="text-gray-600 text-md mb-10">
                        Get unlimited access to reports from previous<br/>landslords about your prospective tenants.<br/>
                        Check Before You let. before it's too late!
                    </p>
                    <div class="relative">
                        <input type="email" class="h-14 w-3/4 pl-10 pr-20 rounded-full z-0 shadow-lg focus:outline-0" placeholder="Enter your email">
                        <button class="absolute top-0 right-16 flex justify-center items-center h-14 w-1/4 text-white rounded-full bg-primary hover:bg-opacity-90">
                            Sign Up &nbsp;
                            <img src="{{ asset('key_icon.png') }}" />
                        </button>
                    </div>
                </div>
                <div class="w-8/12 flex justify-end">
                    <x-hero></x-hero>
                </div>
            </div>    
        </div>

        <div class="flex bg-gray-100 py-4 justify-center">
            <div class="w-3/6 p-6 text-2xl relative">
                <div class="absolute top-0 flex">
                    <span class="block bg-gray-500 w-4 h-14 mr-2 opacity-25"></span>
                    <span class="block bg-gray-500 w-4 h-14 ml-2 opacity-25"></span>
                </div>
                <div>
                    I was tired of seeing tenants walk away from properties after paying a fortune to have them removed, only for them to go and do it all again.
                    <br/>Check Before You Let gives us <span class="text-purple-900">peace of mind.</span>
                </div>
                <div class="absolute bottom-0 right-36 flex">
                    <span class="block bg-gray-500 w-4 h-14 mr-2 opacity-25"></span>
                    <span class="block bg-gray-500 w-4 h-14 ml-2 opacity-25"></span>
                </div>
            </div>
            <div class="w-2/6 flex items-center p-8">
                <img src="{{ asset('pic1.png') }}" />
                <div class="flex flex-col pl-5">
                    <h4 class="font-bold">Sarah Conner</h4>
                    <p>Top Estate Agents</p>
                </div>
            </div>
        </div>

        <div class="container m-auto text-center py-20">
            <h1 class="font-bold text-5xl">How It Works</h1>
            <img class="w-2/5 m-auto mt-10" src="{{ asset('hiw.png') }}" />
        </div>

        <div class="container m-auto w-full flex justify-center py-10">
            <div class="w-1/4 px-8 border-l border-l-gray-200 relative">
                <img class="absolute top-0 -left-9" src="{{ asset('key.png') }}" />
                <h2 class="font-bold text-3xl">  
                    Sign Up
                </h2>
                <p class="pt-5">
                    Create your account in a few simple steps and subscribe to our service
                </p>
            </div>
            <div class="w-1/4 px-8 border-l border-l-gray-200 relative">
                <img class="absolute top-0 -left-9" src="{{ asset('key_2.png') }}" />
                <h2 class="font-bold text-3xl">Create Reports</h2>
                <p class="pt-5">
                    Post reports about your experiences with previous tenants, good or bad.
                </p>
            </div>
            <div class="w-1/4 px-8 border-l border-l-gray-200 relative">
                <img class="absolute top-0 -left-9" src="{{ asset('key_3.png') }}" />
                <h2 class="font-bold text-3xl">Unlimited Searches</h2>
                <p class="pt-12">
                    Perform unlimited searches on our database with our premium service.
                </p>
            </div>
        </div>

        <div class="m-auto container text-center p-20">
            <h1 class="font-bold text-6xl mb-10">Cheaper, and better value than a credit check</h1>
            <p class="text-xl">Check Before You Let gives you unlimited access to a database of reports from landlords detailing far more than a simple credit check. We give you what a credit check can't, and for one small yearly fee. Say goodbye to expensive credit checks every time you search a prospective tenant.</p>
        </div>

        <div class="container m-auto w-full flex justify-center items-end py-100">
            <div class="w-2/6 px-12">
                <img class="w-3/4 h-2/4 m-auto" src="{{ asset('h1.png') }}" />
                <h3 class="font-bold text-3xl mt-20">Unlimited Searches on our database</h3>
                <p class="pt-5">
                    Instead of paying to credit check every prospective tenant, you can search our database as many times as you like. Our reports give you the complete picture on how a tenant has behaved in the past. 
                </p>
            </div>
            <div class="w-2/6 px-12 ">
                <img class="w-3/4 h-2/4 m-auto" src="{{ asset('h2.png') }}" />
                <h3 class="font-bold text-3xl mt-20">Unlimited SearchesOne small yearly subscription</h3>
                <p class="pt-12">
                    For less than the cost of a credit search, you can have access to our database where you can perform as many searches as you like.
                </p>
            </div>
        </div>

        <div class="my-10 text-center">
            <button class="text-purple-900 border-2 border-purple-700 bg-white w-3/16 flex items-center hover:bg-purple-600 hover:text-white rounded-full m-auto py-2 px-12">Join Now <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
    </svg></button>
        </div>

        <div class="m-auto container text-center w-full py-20">
            <h2 class="font-bold text-5xl mb-20">What do ofther landlords think?</h2>

            <div class="flex justify-center">
                <div class="w-2/4">
                    <img alt="what-to-do" src="{{ asset('what-to-do.png') }}" />
                </div>

                <div class="w-1/4 flex flex-col">
                    <div class="flex flex-col p-8 shadow-xl mb-6 rounded-lg">
                        <p>
                            "A simple credit check doesn't give you the whole picture, now I can see how a tenant has behaved in the past and make more informed decisions."
                        </p>
                        <div class="flex items-center py-10">
                            <x-pic></x-pic>
                            <h4 class="ml-6 text-purple-500 font-bold">Another Landlord</h4>
                        </div>
                    </div>

                    <div class="flex flex-col p-8 shadow-xl mb-6 rounded-lg">
                        <p>
                            "A simple credit check doesn't give you the whole picture, now I can see how a tenant has behaved in the past and make more informed decisions."
                        </p>
                        <div class="flex items-center py-10">
                            <x-pic></x-pic>
                            <h4 class="ml-6 text-purple-500 font-bold">Another Landlord</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <x-footer></x-footer>

        <x-subscribe-modal :currentStep="$currentStep" :paymentMethod="$paymentMethod"></x-subscribe-modal>

        <x-login-modal></x-login-modal>
        <x-forgot-password-modal></x-forgot-password-modal>

        <x-alert-modal></x-alert-modal> --}}
    </div>
</x-app-layout>