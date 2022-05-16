<div class="flex grow justify-between w-full h-full py-5 md:py-20 px-10">
    <div class="w-full md:w-4/12 lg:w-5/12 flex flex-col justify-center">
        <h1 class="text-black font-bold text-[36px] leading-tight mb-4 md:text-[68px]">
            My Account
        </h1>
        <p class="text-[16px] md:text-[20px]" style="font-family: 'Raleway'">What do you want to do?</p>

        <a href="{{ route('account.edit') }}" class="text-primary hover:text-primary font-bold mt-10 font-heading text-[15px] md:text-[18px] underline">Update Account Settings</a>
    </div> 
    <div class="w-[543px] h-[304.7px] justify-end md:flex pl-10">
        <!-- <img src="{{ asset('account.png') }}" /> -->
        @svg('my-account-hero.svg', '')
    </div>
</div>

<div class="flex flex-col md:flex-row grow justify-center w-full h-full py-5 md:py-20 md:space-x-20 px-10 mb-20">
    <div class="w-[499.55px] h-[525px] flex flex-col justify-between md:flex border shadow-md rounded-xl">
        <div class="px-10 py-10">
            <!-- <img class="w-[362.73px] h-[285.69px] m-auto" src="{{ asset('c56.png') }}" /> -->
            @svg('search-tenant-information.svg', 'w-[362.73px] h-[285.69px] m-auto')
        </div>
        <div class="py-10 w-[500px] h-[157px] bg-gray-100 text-center rounded-b-xl">
            <h2 class="text-center text-[15px] md:text-[26px] font-bold font-heading">Search tenant information</h2>
            <a href="{{ route('account.tenant.search') }}" class="m-auto my-4 w-[85px] h-[37px] flex justify-center border-2 py-1 px-4 rounded-md border-primary text-primary hover:text-primary hover:bg-white"><span class="font-heading text-[8px] md:text-[16px]">Go</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg></a>
        </div>
    </div>
    <div class="w-[499.55px] h-[525px] flex flex-col justify-between md:flex border shadow-md rounded-xl mt-10 md:mt-0">
        <div class="px-10 py-10">
            <!-- <img class="w-[364.06px] h-[285.69px] m-auto" src="{{ asset('c57.png') }}" /> -->
            @svg('enter-tenant-information.svg', 'w-[362.73px] h-[285.69px] m-auto')
        </div>
        <div class="py-10 w-[500px] h-[157px] bg-gray-100 text-center rounded-b-xl">
            <h2 class="text-center text-[15px] md:text-[26px] font-bold font-heading">Enter tenant information</h2>
            <a href="{{ route('account.tenant.add') }}" class="m-auto my-4 w-[85px] h-[37px] flex justify-center border-2 rounded-md py-1 px-4 border-primary text-primary hover:text-primary hover:bg-white"><span class="font-heading text-[8px] md:text-[16px]">Go</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
</svg></a>
        </div>
    </div>
</div>

