<div
    x-cloak
    x-data="{ show: @entangle($attributes->wire('model')) }"
    x-show="show"
    class="fixed inset-0 overflow-y-auto px-4 py-6 md:py-24 sm:px-0 z-40"
>
    <div class="fixed inset-0 transform" x-on:click="show = false">
        <div x-show="show" class="absolute inset-0 bg-gray-500 opacity-100"></div>
    </div>
    <div
        x-show="show"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        x-on:keydown.escape.window="show = false"
        class="bg-gray-100 rounded-lg overflow-hidden transform m-auto sm:w-full md:w-3/6"
    >
        {{ $slot }}
    </div>
</div>