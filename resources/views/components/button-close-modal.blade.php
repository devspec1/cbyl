<div {{ $attributes }}>
    <button wire:click.prevent="$emitTo('{{ $name }}', 'close')" class="rounded-full bg-gray-200 hover:bg-gray-500">
        <svg class="w-6 h-6 text-gray-600 p-1 hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
            </path>
        </svg>
    </button>
</div>