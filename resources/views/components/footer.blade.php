<footer class="container sticky top-[100vh] bg-gray-100 sm:bg-white">
    <div class="flex flex-col md:flex-row md:justify-between py-10 sm:border-t-2 sm:border-gray-500 ">
        <div class="w-full md:w-1/3 md:pr-6">
            <h1 class="font-bold text-2xl font-heading text-[30px]">Check <span class="text-primary">Before</span> You Let</h1>
            <p class="font-heading text-[16px]">Before it's <span class="text-secondary">too late!</span></p>
        </div>
        <div class="w-full m-0 mt-5 md:mt-0 md:w-1/3 md:px-6">
            <h1 class="font-bold text-2xl">Navigation</h1>
            <ul class="list-none">
                <li><a href="{{ route('landing') }}" class="hover:text-primary">Home</a></li>
                <li><a href="{{ route('faq') }}" class="hover:text-primary">FAQ</a></li>
                <li><a href="{{ route('contacts') }}" class="hover:text-primary">Contact Us</a></li>
                <!-- <li><a href="{{ route('landing') }}" class="hover:text-primary">Affiliates</a></li>
                <li><a href="{{ route('landing') }}" class="hover:text-primary">Customer Support</a></li>
                <li><a href="{{ route('landing') }}" class="hover:text-primary">Careers</a></li> -->
            </ul>
        </div>

        <div class="w-full mt-5 md:mt-0 md:w-1/3 pl-0 md:pl-6 flex md:justify-end">
            {{--  --}}
            <a href="https://twitter.com" class="ml-0 md:mx-4 hover:opacity-90">
               <img src="{{ asset('twitter.png') }}" />
            </a>
            <a href="https://facebook.com" class="mx-4 hover:opacity-90">
                <img src="{{ asset('fb.png') }}" />
            </a>
            <a href="https://www.instagram.com" class="mx-4 hover:opacity-90">
                <img src="{{ asset('insta.png') }}" />
            </a>
            <a href="https://www.linkedin.com" class="mx-4 hover:opacity-90">
                <img src="{{ asset('in.png') }}" />
            </a>
        </div>
    </div>

    <div class="m-auto flex flex-col-reverse md:flex-start md:flex-row md:justify-between text-gray-500 text-sm pb-1 items-start md:items-center">
        <span class="mb-3">Copyright checkbeforeyoulet 2022</span>
        <span class="mb-3"><a href="{{ route('privacy-policy') }}" class="hover:text-primary">Privacy</a>/<a href="{{ route('terms') }}" class="hover:text-primary">Terms and Conditions</a> </span>
    </div>

</footer>
