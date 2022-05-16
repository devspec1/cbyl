<form wire:submit.prevent='sendMessage' class="py-16">
    <div class="relative z-0 mb-2 md:mb-6 w-2/3 md:w-1/3 group">
        <label for="small-input"
            class="block mb-2 text-[18px] font-bold font-heading text-gray-900 {{ $errors->has('email') ? 'text-red-700' : '' }}">Email
            Address</label>
        <input wire:model.lazy='email' type="text"
            class="shadow-xl block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('email') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}">
        @error('email')
            <x-error message="{{ $message }}"></x-error>
        @enderror
    </div>

    <div class="relative z-0 mb-6 w-full group">
        <label for="small-input"
            class="block mb-2 text-[18px] font-bold font-heading text-gray-900 {{ $errors->has('message') ? 'text-red-700' : '' }}">Message</label>
        <textarea wire:model.lazy='message' rows="6"
            class="shadow-xl block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary {{ $errors->has('message') ? 'bg-red-50 border border-red-700 text-red-900 placeholder-red-700' : '' }}"></textarea>
        @error('message')
            <x-error message="{{ $message }}"></x-error>
        @enderror
    </div>

    <div class="flex w-full mt-10">
        <button wire:loading.attr="disabled" type="submit"
            class="flex text-white bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-purple-300 rounded-sm text-sm w-full sm:w-auto px-4 py-2 text-center md:mr-4 mx-4 md:mx-0 justify-center items-center disabled:opacity-60">
            <span wire:loading wire:target="sendMessage">
                <x-loading-icon></x-loading-icon>
            </span>
            <span class="mr-3">Send Message</span> <x-arrow-icon></x-arrow-icon></button>
        </button>
    </div>
</form>
