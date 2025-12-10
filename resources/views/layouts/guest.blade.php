<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-tl from-[#DC3545] via-[#DC3545]/60 to-[#DC3545]/10"
>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-10 px-4 sm:px-0">
        <div class="-mt-[10rem]">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Altamar" width="300">
            </a>
        </div>

        <div class="w-full  sm:max-w-md mt-6 px-6 py-8  shadow-2xl overflow-hidden sm:rounded-lg text-[#fef2f2]">
            {{ $slot }}
        </div>
    </div>

</body>
</html>
