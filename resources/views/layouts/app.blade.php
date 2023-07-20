<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'ArtHub') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

        <!-- Fonts -->
         @vite('resources/css/app.css')
         <script src="https://kit.fontawesome.com/e2ee2d8c5c.js" crossorigin="anonymous"></script>
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:ital,wght@0,1;0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,1;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="antialiased pt-[70px] sm:overflow-auto">
        <x-header></x-header>
        <div class="container mx-auto">
            <x-burger-content></x-burger-content>
            <main>
                {{ $slot }}
 
                @livewire('notifications')
            </main>
        </div>
        @livewireScripts
        <script src="{{ asset('js/dropdown.js') }}"></script>
        @yield('scripts')
    </body>
</html>
