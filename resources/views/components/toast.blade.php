@if (session()->has('warning'))
    <div class="fixed top-0 right-0 mt-2 mr-2 shadow-md flex p-4 mb-4 text-sm text-gray-700 bg-yellow-200 rounded-lg>
    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div>
            {{ session('warning') }}
        </div>
    </div>
@endif

@if (session()->has('success'))
    <div class="w-60 fixed top-0 right-0 mt-2 mr-2 shadow-md flex p-4 mb-4 text-sm text-white bg-green-500 rounded-lg" role="alert">
    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div>
            {{ session('success') }}
        </div>
    </div>
@endif

@if (session()->has('info'))
    <div class="fixed top-0 right-0 mt-2 mr-2 shadow-md flex p-4 mb-4 text-sm text-white bg-sky-500 rounded-lg" role="alert">
    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div>
            {{ session('success') }}
        </div>
    </div>
@endif

@if (session()->has('error'))
    <div class="fixed top-0 right-0 mt-2 mr-2 shadow-md flex p-4 mb-4 text-sm text-white bg-red-500 rounded-lg" role="alert">
    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div>
            {{ session('error') }}
        </div>
    </div>
@endif