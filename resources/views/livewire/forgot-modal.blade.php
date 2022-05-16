<div>
    <x-modal wire:model="show" class="bg-gray-100 relative">
        <div class="w-full flex justify-end items-center absolute top-2 right-0 px-4 pl-2">
            <x-button-close-modal name="forgot-modal"></x-button-close-modal>
        </div>

        <form class="mb-10" wire:submit.prevent='forgotPassword'>
            <h1 class="text-3xl pt-20 pb-10 font-bold text-center">
                Reset password 
            </h1>

            <div class="flex flex-col items-center p-5 m:p-32 m-4">
            
                <div class="relative z-0 mb-6 w-full group">
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 {{ $errors->has('firstName') ? 'text-red-500' : '' }}">Email Address</label>
                    <input wire:model='email' type="email" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('email') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700' : '' }}">
                    @error('email')
                        <x-error message="{{ $message }}"></x-error>
                    @enderror
                </div>
                
                <div class="flex w-full mt-10">
                    <button type="submit" class="text-white bg-primary hover:bg-opacity-90 focus:outline-none rounded-sm text-sm w-full sm:w-auto px-4 py-2 text-center md:mr-4 mx-4 md:mx-0 justify-center">
                        <span wire:loading wire:target="forgotPassword">
                            <x-loading-icon></x-loading-icon>
                        </span>
                        Reset password</button>
                </div>
            </div>
                
            
        </form>
    </x-modal>
</div>
