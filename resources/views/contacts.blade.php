<x-app-layout>
    <div class="flex grow flex-col w-full h-full md:py-24 md:px-10">
        <h1 class="font-extrabold font-heading text-[60px] md:text-[68px] mb-5">Contact</h1>
        <p class="text-[12px] mb-4 md:text-[18px] md:mb-0" style="font-family: 'Raleway'">Have a question that's <a href="{{ route('faq') }}" class="text-primary underline">not answered in our FAQ?</a> Contact us below.</p>
        <p class="text-[12px] md:text-[18px]" style="font-family: 'Raleway'">You can also send an e-mail to: <a href="mailto:info@checkbeforeyoulet.co.uk?subject=Help&body=" class="text-primary underline">info@checkbeforeyoulet.co.uk</a></p>

        <livewire:contact-form>

    </div>
</x-app-layout>
