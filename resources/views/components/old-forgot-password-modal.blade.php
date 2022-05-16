@props(['currentStep' => 1, 'paymentMethod' => 'credit_card'])

<x-modal class="bg-gray-100 w-2/4 relative" trigger="showForgotPassword">
    <div class="w-full flex justify-end items-center absolute top-2 right-0 px-4 pl-2">
        <a href="#" class="rounded-full bg-gray-200 hover:bg-gray-300">
            <svg class="w-6 h-6 text-gray-500 p-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </a>
    </div>

    <form wire:submit.prevent="subscribe" class="mb-10">
        <h1 class="text-3xl py-2 font-bold text-center">
            Reset password 
        </h1>

        <div class="flex flex-col items-center p-32 m-4">
        
            <div class="relative z-0 mb-6 w-full group">
                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Email Address</label>
                <input type="text" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-purple-500 focus:border-purple-500">
            </div>
            
            <div class="flex w-full mt-10">
                <button @click='showSubscribeDialog = false; showForgotPassword = false; showLogin = true' type="submit" class="text-white bg-purple-700 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-300 rounded-sm text-sm w-full sm:w-auto px-4 py-2 text-center mr-4">Reset password</button>
            </div>
        </div>
            
        
    </form>
</x-modal>