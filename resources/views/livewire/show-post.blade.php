<div>
    <div class="grid lg:grid-cols-[1fr_3fr_1fr] grid-rows-1 grid-cols-[minmax(120px,_1fr)_2fr]">
        <div class="w-full p-2 sticky z-[80] top-[70px] h-max">
            <div class="flex w-full flex-col items-center justify-between min-[1px]:text-sm md:text-base">
                <div class="w-20 relative h-20 rounded-full">
                    <div class=" absolute top-[-105%] left-2 flex items-center w-[60px] h-full">
                            <img class="w-[60px] h-[60px]" src="{{ asset('images/logo.png') }}" alt="">
                    </div>
                    <img class="h-full w-full border-2 border-pink-500" src="{{ asset('images/urahara.jpg') }}" alt="avatar">
                </div>
                <h2>iNSaNiTY</h2>
                <h3 class="text-center font-thin text-darkblue"><span class=" font-bold text-darkblue">6669</span> <br> Subscibers</h3>
                <button class="border border-pink-800 rounded-md min-[320px]:min-w-[90px] md:min-w-[200px] p-1 my-1 text-darkblue">Send message</button>
                <button class="border border-pink-800 rounded-md min-[320px]:min-w-[90px] md:min-w-[200px] p-1 my-1 text-darkblue">Send tip</button>
                <div class="flex">
                    <a class="md:m-2 m-1" href=""><i class="fa-brands p-1 text-rose-800 fa-youtube md:fa-lg"></i>
    </a>                          <a class="md:m-2 m-1" href=""><i class="fa-brands text-cyan-700 fa-twitter md:fa-lg"></i>
    </a>                          <a class="md:m-2 m-1" href=""><i class="fa-brands text-sky-800 fa-discord md:fa-lg"></i>
    </a>                         <a class="md:m-2 m-1" href=""><i class="fa-brands text-cyan-800 fa-telegram md:fa-lg"></i>
    </a>                           <a class="md:m-2 m-1" href=""><i class="fa-brands text-amber-600 fa-instagram md:fa-lg"></i></a>
                </div>
            </div>
            <div class="w-full my-2 lg:hidden min-[1px]:text-xs md:text-base h-[300px] overflow-y-auto">
                <div class="flex flex-col rounded-t-md">
                    <div class="flex flex-col border rounded-t-md border-pink-800 min-[1px]:text-center md:text-left">
                        <h2 class=" text-center border-b border-pink-800 text-darkblue" >Subscribtion levels</h2>
                        <x-subscription></x-subscription>
                        <x-subscription></x-subscription>
                        <x-subscription></x-subscription>
                        <x-subscription></x-subscription>
                        <x-subscription></x-subscription>
                        <x-subscription></x-subscription>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full p-2 relative">
            <x-post-card></x-post-card>
            <x-comments-block>
            </x-comments-block>
        </div>
        <div class=" post-wrapper-desktop w-full p-2 sticky min-[320px]:hidden lg:flex top-[70px] h-max max-h-[calc(100vh-80px)] overflow-y-auto">
            <div class="flex flex-col rounded-t-md">
                <div class="flex flex-col border rounded-t-md border-pink-800 min-[1px]:text-center md:text-left">
                    <h2 class=" text-center text-darkblue border-b border-pink-800">Subscribtion levels</h2>
                    <x-subscription></x-subscription>
                    <x-subscription></x-subscription>
                    <x-subscription></x-subscription>
                    <x-subscription></x-subscription>
    
                </div>
            </div>
        </div>
    </div>
</div>

