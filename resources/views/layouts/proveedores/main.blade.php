<!DOCTYPE html>
<html lang="es" x-data="{ open: false }" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', config('app.name', 'Topik Trucks'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
  
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
  <body class="bg-slate-50 text-slate-800">

    @livewire('public.componentes.header-layout-main')

    {{-- Contenido principal --}}
    <main class="">
        @yield('content')
    </main>

    @livewire('public.componentes.footer-layout-main')

    @stack('scripts')
    @livewireScripts
    <script>
      document.getElementById("year").textContent = new Date().getFullYear();
    </script>
</body>
</html>

