<div>
    <h1 class="text-3xl py-2 font-extrabold text-center">
        Create your account
    </h1>
    <p class="text-xs text-center py-2">Already registered? <a href="#" wire:click.prevent='openLoginFormModal'
            class="text-primary">Log in here</a></p>
    <div class="flex flex-col items-center w-5/6 m-auto">
        <div class="flex flex-col items-center p-6 rounded-md bg-white m-4 w-full">
            <div class="w-full grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="first_name"
                        class="font-bold block mb-2 text-sm text-gray-900 {{ $errors->has('firstName') ? 'text-red-500' : '' }}">Full Name</label>
                    <input wire:model='firstName' type="text"
                        class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('firstName') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                    @error('firstName')
                        <x-error message="{{ $message }}"></x-error>
                    @enderror
                </div>

            </div>
            <div class="w-full grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="small-input"
                        class="font-bold block mb-2 text-sm text-gray-900 {{ $errors->has('email') ? 'text-red-500' : '' }}">Email</label>
                    <input type="email" wire:model='email'
                        class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('email') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                    @error('email')
                        <x-error message="{{ $message }}"></x-error>
                    @enderror
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="small-input"
                        class="font-bold block mb-2 text-sm text-gray-900 {{ $errors->has('confirmEmail') ? 'text-red-500' : '' }}">Confirm
                        Email</label>
                    <input type="email" wire:model='confirmEmail'
                        class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('confirmEmail') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                    @error('confirmEmail')
                        <x-error message="{{ $message }}"></x-error>
                    @enderror
                </div>
            </div>
            <div class="w-full grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="small-input"
                        class="block mb-2 text-sm font-bold text-gray-900 {{ $errors->has('password') ? 'text-red-500' : '' }}">Password</label>
                    <input type="password" wire:model='password'
                        class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('password') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                    @error('password')
                        <x-error message="{{ $message }}"></x-error>
                    @enderror
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="small-input"
                        class="block mb-2 text-sm font-bold text-gray-900 {{ $errors->has('confirmPassword') ? 'text-red-500' : '' }}">Confirm
                        Password</label>
                    <input type="password" wire:model='confirmPassword'
                        class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('confirmPassword') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                    @error('confirmPassword')
                        <x-error message="{{ $message }}"></x-error>
                    @enderror
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mb-4">
            <input id="isAgreedTermsAndServices" wire:model='isAgreedTermsAndServices' type="checkbox"
                class="w-4 h-4 text-primary bg-gray-100 rounded border-gray-300 focus:ring-primary {{ $errors->has('isAgreedTermsAndServices')? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700': '' }}">
            <label for="isAgreedTermsAndServices" class="ml-3 text-sm text-gray-900"
                {{ $errors->has('isAgreedTermsAndServices') ? 'text-red-500' : '' }}>I have read and agreed to the <a
                    href="{{ route('terms') }}" class="underline">terms and services</a></label>
        </div>
        <div class="flex justify-center md:justify-end w-full pb-10 ">
            <button
                @disabled(!$isAgreedTermsAndServices)
                wire:click='nextStep'
                wire:loading.attr="disabled"
                type="button"
                class="text-white flex bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-primary rounded-sm text-sm w-36 md:w-36 py-2 text-center md:m-0 mx-4 justify-center items-center disabled:bg-opacity-50 disabled:cursor-not-allowed">
                <span wire:loading wire:target="nextStep"><x-loading-icon></x-loading-icon></span>
                <span class="mr-3">Continue</span> <x-arrow-icon></x-arrow-icon></button>
        </div>
    </div>
</div>
