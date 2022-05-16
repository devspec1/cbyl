<x-app-layout>
    <div class="md:flex-col md:justify-between w-full h-full py-6 md:py-32">
        <div class="w-full md:w-full flex flex-col md:flex-row justify-between">
            <div class="flex flex-col md:flex-col">
                <h1 class="text-black font-extrabold font-heading text-[45px] md:text-[68px] leading-none md:leading-[72px] mb-4">
                    Get the<br />
                    <span class="text-primary">Right Tenant</span><br />
                    first time!
                </h1>

                <p class="text-gray-600 text-[18px] lg:max-w-[415px] mb-10">
                    Get unlimited access to reports from previous landlords about your prospective tenants.<br />
                    Check Before You let, before it's too late!
                </p>

                <div class="relative w-full hidden md:flex md:flex-col justify-end px-10 md:p-0 md:pl-0 lg:max-w-[447px]">
                    <input type="email" class="h-14 w-full border-none pl-5 md:pr-20 rounded-full z-0 focus:outline-0" placeholder="Enter your email" style="box-shadow: 5px 0px 15px 5px rgb(0 0 0 / 15%);">
                    <button x-data="{}" @click="window.livewire.emitTo('create-account-modal', 'show')" class="absolute top-0 right-10 md:right-0 flex justify-center items-center h-14 w-28 md:w-32 text-white rounded-full bg-secondary hover:bg-opacity-90">
                        Sign Up
                        <img class="hidden md:block md:ml-2" src="{{ asset('key_icon.png') }}" />
                    </button>
                </div>
            </div>
            <div class="relative p-0 md:mr-[-50px]">
                @svg('hero-image.svg', 'md:w-[598px] lg:w-[697px]')
            </div>

            <div class="md:hidden mt-5 relative w-full flex flex-col md:flex-col justify-end px-10 md:p-0 md:pl-10 ">
                <input type="email" class="h-14 w-full pl-5 md:pr-20 rounded-full z-0 shadow-lg focus:outline-0" placeholder="Enter your email">
                <button x-data="{}" @click="window.livewire.emitTo('create-account-modal', 'show')" class="absolute top-0 right-10 md:right-0 flex justify-center items-center h-14 w-28 md:w-32 text-white rounded-full bg-secondary hover:bg-opacity-90">
                    Sign Up
                    <img class="hidden md:block md:ml-2" src="{{ asset('key_icon.png') }}" />
                </button>
            </div>
        </div>



    </div>

    <div class="relative flex flex-col md:flex-row py-4 justify-center" style="background: #FBFBFB" ;>
        <div class="absolute overlapped-bg left-[-2rem] md:left-auto"></div>
        <div class="w-full py-2 md:w-7/12 md:py-6 relative">
            <div class="absolute top-0 flex">
                <span class="block bg-gray-500 w-4 h-14 mr-2 opacity-25"></span>
                <span class="block bg-gray-500 w-4 h-14 ml-2 opacity-25"></span>
            </div>
            <div class="text-[26px]">
                I was tired of seeing tenants walk away from properties after paying a fortune to have them removed, only for them to go and do it all again.
                <br />Check Before You Let gives us <span class="text-primary">peace of mind.</span>
            </div>
            <div class="absolute bottom-0 right-10 flex md:right-40">
                <span class="block bg-gray-500 w-4 h-14 mr-2 opacity-25"></span>
                <span class="block bg-gray-500 w-4 h-14 ml-2 opacity-25"></span>
            </div>
        </div>
        <div class="w-full flex flex-col md:w-4/12 md:flex-row items-center p-8">
            <img class="w-[101px] h-[102px]" src="{{ asset('joanne-knowles.png') }}" />
            <div class="flex flex-col text-center md:text-left md:pl-5">
                <h4 class="font-heading text-[26px] pt-2 md:pt-0">Joanne Knowles</h4>
                <p class="text-[14px] text-primary">Independent Landlord</p>
            </div>
        </div>
    </div>
    <div class="text-center py-5 md:py-20">
        <h1 class="font-bold font-heading text-[28px] md:text-[56px]">How It Works</h1>
        @svg('how-it-works.svg', 'w-full md:w-[602px] m-auto mt-5 md:mt-10')
    </div>

    <div class="w-full flex flex-col md:flex-row justify-center py-10 md:py-5 md:px-20">
        <div class="w-3/4 m-auto md:mt-0 md:w-1/4 pl-8 border-l border-l-gray-200 relative md:h-[234.5px]">
            @svg('key1.svg', 'absolute top-0 -left-9 w-12')
            <h2 class="font-bold text-xl pl-5 md:pl-0 md:text-[30px]">
                Sign Up<br />&nbsp;
            </h2>
            <p class="py-4 md:py-5 pl-5 md:pl-0 text-[18px] leading-[36px]" style="font-family: 'Raleway'">
                Create your account in a few simple steps and subscribe to our service
            </p>
        </div>
        <div class="w-3/4 m-auto md:mt-0 md:w-1/4 pl-8 border-l border-l-gray-200 relative  md:h-[234.5px]">
            @svg('key2.svg', 'absolute top-0 -left-9 w-12')
            <h2 class="font-bold text-xl pl-5 md:pl-0 md:text-[30px]">Create Reports</h2>
            <p class="py-4 md:py-5 pl-5 md:pl-0 text-[18px] leading-[36px]" style="font-family: 'Raleway'">
                Post reports about your experiences with previous tenants, good or bad.
            </p>
        </div>
        <div class="w-3/4 m-auto md:mt-0 md:w-1/4 pl-8 border-l border-l-gray-200 relative  md:h-[234.5px]">
            @svg('key3.svg', 'absolute top-0 -left-9 w-12')
            <h2 class="font-bold text-xl pl-5 md:pl-0 md:text-[30px]">Unlimited Searches</h2>
            <p class="py-4 md:py-5 pl-5 md:pl-0 text-[18px] leading-[36px]" style="font-family: 'Raleway'">
                Perform unlimited searches on our database with our premium service.
            </p>
        </div>
    </div>
    <div class="md:text-center p-2 md:px-20 md:mt-20">
        <h1 class="text-center font-bold text-[30px] md:text-[56px] mb-4 md:mb-10">Cheaper, and better value than a credit check</h1>
        <p class="text-[18px] md:text-[22px] leading-[38px]" style="font-family: 'Raleway'">Check Before You Let gives you unlimited access to a database of reports from landlords detailing far more than a simple credit check. We give you what a credit check can't, and for one small yearly fee. Say goodbye to expensive credit checks every time you search a prospective tenant.</p>
    </div>

    <div class="w-full flex flex-col md:flex-row md:items-end justify-center py-0 md:px-20 md:py-100">
        <div class="w-full pr-0 md:pr-5 md:w-3/6">
            @svg('unlimited-searches.svg', 'md:block md:w-[392px] md:h-[209px] m-auto md:mt-20')
            <h3 class="font-bold text-[21px] md:text-[26px] mt-5 md:mt-20">Unlimited Searches on our database</h3>
            <p class="py-4 text-[17px] md:text-left md:py-12">
                Instead of paying to credit check every prospective tenant, you can search our database as many times as you like. Our reports give you the complete picture on how a tenant has behaved in the past.
            </p>
        </div>
        <div class="w-full pl-0 md:pl-5 md:w-3/6">
            @svg('one-small-yearly-subscription.svg', 'md:block md:w-[275px] md:h-[277px] m-auto md:mt-20')
            <h3 class="font-bold text-[21px] md:text-[26px] mt-5">One small yearly subscription</h3>
            <p class="py-4 text-[17px] md:text-left md:py-12 md:pb-[71px]">
                For less than the cost of a credit search, you can have access to our database where you can perform as many searches as you like.
            </p>
        </div>
    </div>

    <div class="mt-[52px] mb-[160px] text-center">
        <button x-data="{}" @click="window.livewire.emitTo('create-account-modal', 'show')" class="text-primary border-2 border-primary bg-white w-3/16 flex items-center hover:bg-primary hover:text-white rounded-full m-auto py-2 px-12 font-semibold">Join Now <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <div class="flex flex-col text-center md:px-20 mb-32">
        <h2 class="font-bold text-[25px] md:text-[56px] break-words md:mb-20">What do other landlords think?</h2>
        <div class="md:flex md:flex-row justify-between items-start">
            <div class="w-[288px] h-[188px] md:w-[519px] md:h-[338px] mx-auto mt-16">
                <!-- <video id="my-player" class="video-js vjs-theme-fantasy" controls preload="auto" poster="{{ asset('what-to-do.png') }}" data-setup='{}' controls style="border-radius: 40px; width: 100%; height: 100%;" class="mr-0 md:mr-14">
                    <source src="{{ asset('wtd6.mp4') }}" type="video/mp4">
                </video> -->
                <div class="flex flex-col p-8 mb-10 rounded-2xl w-[315px] md:w-[385px] text-[17px] md:text-lg" style="box-shadow: 5px 0px 15px 5px rgb(0 0 0 / 15%);">
                    <p class="text-left">
                        "If only I’d known about Check Before You Let before spending so much time and money evicting a tenant. A credit check only tells you so much, the best tenant reference in my view is a previous landlord."
                    </p>
                    <div class="text-left pt-10 pb-3">
                        <h4 class="text-primary font-semibold text-2xl">Ed Fairclough</h4>
                        <p class="text-[14px]">Independent Landlord</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-6/12 flex flex-col pt-8 items-center md:items-end">
                <div class="flex flex-col p-8 mb-10 rounded-2xl w-[305px] md:w-[370px] text-[17px] md:text-lg" style="box-shadow: 5px 0px 15px 5px rgb(0 0 0 / 15%);">
                    <p class="text-left">
                        "Having the ability to do as many tenant reference checks as I want has made finding a tenant so much easier. This site is a game-changer for the industry."
                    </p>
                    <div class="text-left pt-10 pb-3">
                        <h4 class="text-primary font-semibold text-2xl">Steven Pickles</h4>
                        <p class="text-[14px]">Independent Landlord</p>
                    </div>
                </div>

                <div class="flex flex-col p-8 mb-10 rounded-2xl text-[17px] md:text-lg w-[305px] md:w-[370px]" style="box-shadow: 5px 0px 15px 5px rgb(0 0 0 / 15%);">
                    <p class="text-left">
                        "A tenant background check is the best way to protect against serial bad behaviour. Check Before You Let is helping us put a stop to it. Every landlord needs this service!"
                    </p>
                    <div class="text-left pt-10 pb-3">
                        <h4 class="text-primary font-semibold text-2xl">Martin Turner</h4>
                        <p class="text-[14px]">Independent Landlord</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>