<nav x-data="{ showMenu: false }" class="bg-white md:border-b border-b-0 shadow-md sticky top-0 w-full z-30">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <x-application-logo></x-application-logo>
    <div class="flex items-center md:order-2">
        <button @click="showMenu = !showMenu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 outline-none" aria-controls="mobile-menu" aria-expanded="false">
            <svg x-cloak x-show="showMenu" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <svg x-cloak x-show="!showMenu" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
    <div x-cloak x-show="showMenu" class="md:hidden w-full md:w-auto" id="mobile-menu">
        <ul class="flex flex-col my-10 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li>
                <a href="{{ route('landing') }}"  class="block py-2 pr-4 pl-3 text-gray-700 rounded @if (Route::is("landing")) text-primary @endif md:bg-transparent md:p-0 hover:text-primary font-heading text-[16px] font-medium" aria-current="page">Home</a>
            </li>
            <li>
                <a href="{{ route('faq') }}" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0  md:p-0 hover:text-primary @if (Route::is("faq")) text-primary @endif  font-heading text-[16px] font-medium">FAQ</a>
            </li>
            <li>
                <a href="{{ route('contacts') }}" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 hover:text-primary @if (Route::is("contacts")) text-primary @endif  font-heading text-[16px] font-medium">Contact</a>
            </li>
            @auth
                <a href="{{ route('account') }}" wire:click.prevent='logout' class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 hover:text-primary font-heading text-[16px] font-medium">My Account</a>
                <form method="POST" action="{{ route('account.logout') }}">
                    @csrf
                    <button type="submit" class=" text-gray-700 cursor-pointer py-1 px-3 hover:text-primary h-[39px] w-[110px] justify-center text-[15px] font-semibold">Sign Out</a>
                </form>
            @endauth
            @guest

            <li>
                <button x-data="{}" @click="window.livewire.emitTo('login-modal', 'show')" class="w-full block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 hover:text-primary text-left font-semibold">Sign In</button>
            </li>
            <li>
                <a x-data="{}" @click="window.livewire.emitTo('create-account-modal', 'show')" class="py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-primary h-[39px] w-[110px] flex items-center text-[15px] font-semibold">Join Now</a>
            </li>
            @endguest

        </ul>
    </div>
    <div x-cloak class="flex-1 ml-10 justify-between hidden md:flex">
        <div class="flex items-center space-x-4">
            <a href="{{ route('landing') }}" class="text-gray-900 font-heading text-[16px] font-medium @if (Route::is("landing")) text-primary @endif hover:text-primary cursor-pointer py-2 px-4">Home</a>
            <a href="{{ route('faq') }}" class="text-gray-900 font-heading text-[16px] font-medium @if (Route::is("faq")) text-primary @endif  hover:text-primary cursor-pointer py-2 px-4">FAQ</a>
            <a href="{{ route('contacts') }}" class="text-gray-900 font-heading text-[16px] font-medium @if (Route::is("contacts")) text-primary @endif  hover:text-primary cursor-pointer py-2 px-4">Contact</a>
        </div>
        <div class="flex items-center">
            @auth
                <form method="POST" action="{{ route('account.logout') }}">
                    @csrf

                    <a href="{{ route('account') }}" class="text-gray-900  font-heading text-[16px] font-medium hover:text-primary cursor-pointer py-2 px-4">{{ auth()->user()->name }}</a>
                    <button type="submit" class=" text-white cursor-pointer py-1 px-4 border rounded-md bg-primary hover:bg-purple-900 h-[39px] w-[110px] justify-center text-[15px] font-semibold">Sign Out</a>
                </form>
                
            @endauth

            @guest
                <a x-data="{}" @click="window.livewire.emitTo('login-modal', 'show')" class="text-gray-900 hover:text-primary cursor-pointer py-2 px-4 font-heading text-[16px] font-medium">Sign In</a>
                <a x-data="{}" @click="window.livewire.emitTo('create-account-modal', 'show')" class=" text-white cursor-pointer py-1 px-4 border rounded-md bg-primary hover:bg-opacity-80 h-[39px] w-[110px] flex items-center justify-center text-[15px] font-semibold">Join Now</a>
            @endguest
        </div>
    </div>
  </div>
</nav>
