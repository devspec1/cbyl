<x-modal class="bg-gray-100 w-2/4 relative" trigger="showLogin">
    <div class="w-full flex justify-between items-center absolute top-0 left-0 px-4 py-2">
        <a href="#" class="flex">
            <svg class="w-6 h-6 dark:text-gray-500 mr-1 hover:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path></svg>
            Back

        </a>

        <a href="#" class="rounded-full bg-gray-200 hover:bg-gray-300">
            <svg class="w-6 h-6 text-gray-500 p-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </a>
    </div>

    <form wire:submit.prevent="subscribe" class="mb-10">
        <h1 class="text-3xl py-2 font-bold text-center">
            Members Login
        </h1>

        <div class="flex flex-col items-center p-32 m-4">
        
            <div class="relative z-0 mb-6 w-full group">
                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Email Address</label>
                <input type="text" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-purple-500 focus:border-purple-500">
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-purple-500 focus:border-purple-500">
            </div>

            <a @click="showLogin = false; showSubscribeDialog = false; showForgotPassword = true;" href="javascript:void(0);" class="text-gray-500 underline my-3 block w-full">Forgot your password?</a>
            <a @click="showLogin = false; showForgotPassword = false; showSubscribeDialog = true;"  href="javascript:void(0);" class="text-gray-500 underline my-3 block w-full">Create an account?</a>

            <div class="flex w-full mt-10">
                <button wire:click='submitOrder()' type="submit" class="text-white bg-purple-700 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-300 rounded-sm text-sm w-full sm:w-auto px-4 py-2 text-center mr-4">Login now ></button>
            </div>
        </div>
            
        
    </form>
</x-modal>