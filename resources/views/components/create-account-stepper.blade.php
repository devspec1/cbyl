
@props(['currentStep' => 1])

<div class="w-2/3 md:w-2/3 lg:w-2/3 m-auto pt-10 pb-6">
    <div class="flex">
        <div class="w-1/3 md">
            <div class="relative mb-2">
                <div class="w-10 h-10 mx-auto {{ $currentStep === 1 ? 'bg-primary' : 'bg-gray-400' }} rounded-full text-lg text-center text-white flex items-center">
                    <span class="text-center text-white w-full">
                        1
                    </span>
                </div>
            </div>

            <div class="text-xs text-center md:text-base">Account</div>
        </div>

        <div class="w-1/3">
            <div class="relative mb-2">
                <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 3rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                    <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                        <div class="w-0 bg-gray-400 pb-1 rounded" style="width: 100%;"></div>
                    </div>
                </div>

                <div class="w-10 h-10 mx-auto {{ $currentStep === 2 ? 'bg-primary' : 'bg-gray-400' }} rounded-full text-lg text-white flex items-center">
                    <span class="text-center text-white w-full">
                        2
                    </span>
                </div>
            </div>

            <div class="text-xs text-center md:text-base">Cart</div>
        </div>

        
        <div class="w-1/3">
            <div class="relative mb-2">
                <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 3rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                    <div class="w-full bg-gray-400 rounded items-center align-middle align-center flex-1">
                        <div class="w-0 bg-purple-300 pb-1 rounded" style="width: 0%;"></div>
                    </div>
                </div>

                <div class="hover:bg-opacity-90 w-10 h-10 mx-auto {{ $currentStep === 3 ? 'bg-primary' : 'bg-gray-400' }} border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                    <span class="text-center text-white w-full">
                        3
                    </span>
                </div>
            </div>

            <div class="text-xs text-center md:text-base">Billing</div>
        </div>
    </div>
</div>