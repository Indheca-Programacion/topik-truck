<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Sistema Base Laravel'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap"
      rel="stylesheet"
    />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gradient-to-br ">

    <div x-data="{ open: false }" class="flex h-screen">

        {{-- Sidebar --}}
        <x-sidebar />

        {{-- Overlay móvil --}}
        <div x-show="open" @click="open = false" class="fixed inset-0  z-40 md:hidden"></div>

        {{-- Contenido principal --}}
        <div class="flex-1 md:ml-64 flex flex-col ">

            <div class=" shadow shadow-[#fccfcf] bg-[#fef2f2]">
 
                {{-- Botón hamburger móvil --}}
                <div class="md:hidden p-4">
                    <button @click="open = true" class=" text-2xl font-bold">
                         <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"/>
                        </svg>       
                    </button>
                </div>
    
                <x-header-dashboard />
            </div>

            {{-- Page Content --}}
            <main class="flex-1 p-6 rounded-xl mx-4 my-4 bg-[#fef2f2]">
                @yield('content')
            </main>
        </div>
    </div>
    @livewireScripts

</body>
</html>
