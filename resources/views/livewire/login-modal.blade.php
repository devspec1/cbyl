<div>
    <x-modal wire:model="show" class="bg-gray-100 w-2/6 relative">
        <div class="w-full flex justify-end absolute top-0 left-0 px-4 py-2">
            <a wire:click.prevent='close' class="rounded-full bg-gray-200 hover:bg-gray-300 cursor-pointer">
                <x-feathericon-x class="text-gray-500 p-1" />
            </a>
        </div>
        <form class="w-full md:w-3/6 m-auto mb-10 " wire:submit.prevent='login'>
            <h1 class="text-3xl pt-20 pb-10 font-bold text-center">
                Members Login
            </h1>

            <div class="flex flex-col items-center p-5 m:p-32 m-4">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="small-input"
                        class="block mb-2 text-sm font-medium text-gray-900 {{ $errors->has('email') ? 'text-red-700' : '' }}">Email
                        Address</label>
                    <input wire:model='email' type="text"
                        class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:primary focus:border-primary {{ $errors->has('email') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}">
                    @error('email')
                        <x-error message="{{ $message }}"></x-error>
                    @enderror
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="small-input"
                        class="block mb-2 text-sm font-medium text-gray-900 {{ $errors->has('password') ? 'text-red-700' : '' }}">Password</label>
                    <input wire:model='password' type="password"
                        class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:primary focus:border-primary {{ $errors->has('password') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}" />
                    @error('password')
                        <x-error message="{{ $message }}"></x-error>
                    @enderror
                </div>

                <a href="#" wire:click.prevent='openForgotPassword'
                    class="text-gray-500 underline my-3 block w-full">Forgot your password?</a>
                <a href="#" wire:click.prevent="openCreateAccountModal"
                    class="text-gray-500 underline my-3 block w-full cursor-pointer">Create an account?</a>

                <div class="flex w-full mt-10">
                    <button type="submit"
                        class="flex text-white bg-primary hover:bg-opacity-90 focus:outline-none rounded-sm text-sm w-full sm:w-auto px-5 py-2 text-center md:mr-4 mx-4 md:mx-0 justify-center items-center">
                        <span wire:loading wire:target="login">
                            <x-loading-icon></x-loading-icon>
                        </span>
                        <span class="mr-3">Login now</span> <x-arrow-icon></x-arrow-icon>
                    </button>
                </div>
            </div>
        </form>
    </x-modal>
</div>
