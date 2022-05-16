<div>
    <x-modal wire:model.debounce="show" class="bg-gray-100 md:w-1/4 w-1/4 relative">
        <div class="flex w-full my-5 flex-col items-around">
            <h1 class="text-center py-4 text-lg font-medium">Are you sure?</h1>
            <p class="text-center py-2 text-gray-600">This cannot be undone!</p>
            <div class="flex justify-center space-x-10 pb-4 pt-5">
                <button wire:click='delete' type="button"
                    class="flex text-white bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-purple-300 rounded-sm text-sm w-full sm:w-auto px-4 py-2 text-center md:mr-4 mx-4 md:mx-0 justify-center items-center"><span wire:loading wire:target="delete"><x-loading-icon></x-loading-icon></span>
                    <span class="mr-3">Yes</span> <x-arrow-icon></x-arrow-icon></button></button>
                <button x-data="{}" @click="window.livewire.emitTo('confirmation-delete-user-modal', 'close')" type="button"
                    class="flex text-gray-900 bg-gray-300 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-purple-300 rounded-sm text-sm w-full sm:w-auto px-4 py-2 text-center md:mr-4 mx-4 md:mx-0 justify-center items-center">
                    <span class="mr-3">No</span> <x-arrow-icon></x-arrow-icon></button>
            </div>
        </div>
    </x-modal>
</div>
