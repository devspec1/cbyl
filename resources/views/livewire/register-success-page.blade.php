
<div class="flex flex-col flex-grow container m-auto w-full justify-center p-5 md:p-44">
    <div class="block md:hidden text-center py-5 w-full">
        <img class="animate-pulse w-1/3 m-auto" src="{{ asset('congrats.png') }}" />
    </div>
    <h1 class="text-black font-bold text-3xl leading-tight mb-4">Congratulations</h1>
    <p class="text-gray-400 text-sm">You can now log in to our platform and start posting reports.</p>

    <div class="flex flex-row justify-between">
        <form wire:submit.prevent='login' class="flex flex-col items-center w-full md:w-2/3 bg-white my-4">
            <div class="w-full grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="small-input" class="block mb-2 text-sm font-bold text-gray-900 {{ $errors->has('email') ? 'text-red-500' : '' }}">Email</label>
                    <input wire:model='email' type="text"
                        class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('email') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                    @error('email')
                        <x-error message="{{ $message }}"></x-error>
                    @enderror
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="small-input"
                        class="block mb-2 text-sm font-bold text-gray-900 {{ $errors->has('password') ? 'text-red-500' : '' }}">Password</label>
                    <input wire:model='password' type="password"
                        class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('password') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                    @error('password')
                        <x-error message="{{ $message }}"></x-error>
                    @enderror
                </div>
            </div>

            <div class="flex justify-start w-full">
                <button type="submit"
                    wire:loading.attr='disabled'
                    class="text-white bg-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-primary rounded-sm text-sm w-full sm:w-auto m-0 md:px-4 py-2 text-center md:mr-4 flex justify-center items-center disabled:bg-opacity-90">
                <span wire:loading wire:target="login"><x-loading-icon></x-loading-icon></span><span class="mr-3">Sign in</span> <x-arrow-icon></x-arrow-icon></button>
            </div>
        </form>
        <div class="w-1/3 hidden md:block">
            <img class="animate-pulse" src="{{ asset('congrats.png') }}" />
        </div>
    </div>
</div>
