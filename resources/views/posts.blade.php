<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'ArtHub')}}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

        <!-- Fonts -->
        @vite('resources/css/app.css')
        <script src="https://kit.fontawesome.com/e2ee2d8c5c.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:ital,wght@0,1;0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,1;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased pt-[70px] sm:overflow-auto">
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
                                    <li><a class=" inline-flex text-center justify-center items-center hover:bg-pink-100 w-full text-darkblue" href="#">Profile</a></li>
                                    <li><a class=" inline-flex text-center justify-center items-center hover:bg-pink-100 w-full text-darkblue" href="">List</a></li>
                                    <li><a class=" inline-flex text-center justify-center items-center hover:bg-pink-100 w-full text-darkblue" href="">List</a></li>
                                    <li><a class=" inline-flex text-center justify-center items-center hover:bg-pink-100 w-full text-darkblue" href="">List</a></li>
                                    <li><a class=" inline-flex text-center justify-center items-center hover:bg-pink-100 w-full text-darkblue" href="">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container mx-auto">

            <div class="relative z-50 transition-allz">
                <div class=" mobile-nav fixed sm:hidden hidden flex-col w-full h-full justify-start bg-white">
                    <ul>
                        <li><a class="inline-flex w-full h-10 hover:bg-pink-100 justify-center items-center border-b border-pink-800 font-normal" href="">Home</a></li>
                        <li><a class="inline-flex w-full h-10 hover:bg-pink-100 justify-center items-center border-b border-pink-800 font-normal" href="">Creators</a></li>
                        <li><a class="inline-flex w-full h-10 hover:bg-pink-100 justify-center items-center border-b border-pink-800 font-normal" href="">Something</a></li>
                        <li><a class="inline-flex w-full h-10 hover:bg-pink-100 justify-center items-center border-b border-pink-800 font-normal" href="">Home</a></li>
                        <li><a class="inline-flex w-full h-10 hover:bg-pink-100 justify-center items-center border-b border-pink-800 font-normal" href="">Home</a></li>
                    </ul>
                </div>
            </div>

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
                    <div class="min-[1px]:text-xs max-[450px]:text-xs z-[70] mx-auto h-[40px] -mt-2 w-[90%] sticky top-[70px] border-t-0 rounded-t-none bg-white md:text-base flex mb-3 rounded-md border border-pink-800">
                        <form class="h-full w-full flex items-center relative" action="">
                            @method('POST')
                            @csrf
                            <input class="h-[95%] w-[90%] ml-[1px] focus:outline-none border-none focus:ring-0 active:outline-none visited:outline-none text-pink-800" placeholder="Search..." type="search">
                            <div class="flex justify-end items-center w-[10%] h-full">
                                <a class="mx-2 hover:-translate-y-[2px] transition-all" href="#">
                                    <i class="fa-solid fa-magnifying-glass fa-lg text-pink-800"></i>
                                </a>
                                <a class="tags-icon mx-2 hover:-translate-y-[2px] transition-all" href="#">
                                    <i class="fa-solid fa-list-check fa-lg text-pink-800"></i>
                                </a>
                            </div>

                            <div class="tags-block hidden items-center flex-wrap p-2 absolute w-[calc(100%+2px)] h-max max-h-[150px] overflow-auto -left-[1px] top-[35px] bg-white border rounded-b-md border-pink-800">
                                <div class="flex justify-start items-center">
                                    <label class="mr-1" for="anime">Anime</label>
                                    <input class="mr-2" name="anime" type="checkbox">
                                </div>
                            </div>
                        </form>
                    </div>
                    <x-post-card></x-post-card>
                    <x-post-card></x-post-card>
                    <x-post-card></x-post-card>
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
        <script src="{{ asset('js/dropdown.js') }}"></script>
    </body>
</html>
