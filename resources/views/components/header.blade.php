<header class="fixed z-[80] bg-white flex top-0 border-b border-pink-800 h-[70px] w-full">
    <div class="container mx-auto">
        <div class="grid grid-cols-[2fr_3fr_1fr] min-[1px]:max-sm:grid-cols-3 lg:grid-cols-[1fr_3fr_1fr] grid-rows-1 h-full">
            <div class="flex h-full items-center w-full px-2">

            </div>

            <div class="flex h-full min-[1px]:max-sm:hidden items-center w-full px-2">
                <ul class="flex w-full justify-center">
                    <li class=" mx-1 first:ml-0 last:mr-0"><a class=" text-pink-800 hover:text-pink-800 active:text-pink-800" href="">Home</a></li>
                    <li class=" mx-1 first:ml-0 last:mr-0 text-darkblue"><a href="" class="hover:text-pink-800 active:text-pink-800">Creators</a></li>
                    <li class=" mx-1 first:ml-0 last:mr-0 text-darkblue"><a href="" class="hover:text-pink-800 active:text-pink-800">Something</a></li>
                    <li class=" mx-1 first:ml-0 last:mr-0 text-darkblue"><a href="" class="hover:text-pink-800 active:text-pink-800">Else</a></li>
                    <li class=" mx-1 first:ml-0 last:mr-0 text-darkblue"><a href="" class="hover:text-pink-800 active:text-pink-800">Maybe</a></li>
                </ul>
            </div>

            <div class="min-[1px]:max-sm:flex sm:hidden h-full items-center justify-center   w-full px-2">
                <div class="burger-menu min-[1px]:max-sm:flex sm:hidden flex-col justify-between cursor-pointer w-[20px] h-[13px]">
                    {{-- <span class=" w-full h-[2px] bg-pink-800 before:flex before:content-[''] before:mt-[5px] before:h-[2px] before:w-full before:bg-pink-800 before:transition-all after:content-[''] after:mt-[3px] after:h-[2px] after:w-full after:bg-pink-800 after:flex after:transition-all transition-all"></span> --}}
                    <span class="burger-span w-full flex h-[2px] bg-pink-800 transition-all  rounded-lg"></span>
                    <span class="burger-span w-full h-[2px] flex bg-pink-800 transition-all rounded-lg"></span>
                    <span class="burger-span w-full h-[2px] bg-pink-800 transition-all  rounded-lg"></span>
                </div>
            </div>
            
            <div class="flex relative z-30 h-full items-center justify-end min-[1px]:max-sm:justify-center lg:justify-center w-full px-2">
                <div class="flex sm:max-lg:relative w-max user-dropdown hover:cursor-pointer">
                    <span class="text-darkblue">iNSaNiTY</span>
                    <i class="fa-solid fa-chevron-up origin-center text-pink-800   transition-all user-arrow w-[15px] h-[15px] mt-[4px] ml-[4px]"></i>
                    <div class="user-dropdown-menu hidden absolute top-[40px] sm:max-lg:top-[17px] pt-[30px] mx-2 right-0 flex-col sm:max-lg:w-full w-[calc(100%-1rem)] lg:max-xl:w-[calc(98.5%-1rem)] h-max">
                        <ul class="relative z-30 bg-white border border-t-0 border-pink-800">
                            <li><a class=" inline-flex text-center justify-center items-center hover:bg-pink-100 w-full text-darkblue" href="{{ route('profile') }}">Profile</a></li>
                            <li><a class=" inline-flex text-center justify-center items-center hover:bg-pink-100 w-full text-darkblue" href="{{ route('show-posts') }}">Posts</a></li>
                            <li><a class=" inline-flex text-center justify-center items-center hover:bg-pink-100 w-full text-darkblue" href="{{ route('create-post') }}">Create Post</a></li>
                            <li><a class=" inline-flex text-center justify-center items-center hover:bg-pink-100 w-full text-darkblue" href="">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>