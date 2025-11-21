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
    <style>
      html {
        scroll-behavior: smooth;
      }
      body {
        font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu,
          Cantarell, Noto Sans, Helvetica Neue, Arial, "Apple Color Emoji",
          "Segoe UI Emoji";
      }
      .container {
        max-width: 110rem;
      }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
  <body class="bg-slate-50 text-slate-800">

        <!-- Header -->
<header class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-slate-200" x-data="{ open: false }">
  <div class="container mx-auto px-4">
    <div class="flex items-center justify-between py-4">

      <!-- Logo -->
      <a href="#" class="flex items-center gap-2">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-2xl bg-[#DC3545] text-white font-bold shadow-soft">A</span>
        <span class="font-extrabold text-lg tracking-tight">Topik Trucks</span>
      </a>

      <!-- Menu escritorio -->
      <nav class="hidden md:flex items-center gap-6 font-medium">
        <a href="/" class="hover:text-[#DC3545] transition">Inicio</a>
        <a href="/servicios" class="hover:text-[#DC3545] transition">Servicios</a>
        <a href="/contacto" class="hover:text-[#DC3545] transition">Contacto</a>
      </nav>

      <!-- Botón menú móvil -->
      <div class="md:hidden flex items-center gap-3">
        <button @click="open = !open" class="p-2 rounded-md text-slate-700 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-[#DC3545]">
          <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
          </svg>
          <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!-- Botón de acción escritorio -->
      <div class="hidden md:flex items-center gap-3">
        <a href="#" class="inline-flex items-center rounded-xl bg-[#DC3545] px-4 py-2 text-sm font-semibold text-white shadow-soft hover:bg-[#DC3552]">
          Iniciar Sesión
        </a>
      </div>

    </div>

    <!-- Menu móvil desplegable -->
    <div x-show="open" x-transition class="md:hidden mt-2">
      <nav class="flex flex-col gap-2 font-medium bg-white rounded-xl p-4 shadow-soft border border-slate-200">
        <a href="/" class="hover:text-[#DC3545] transition">Inicio</a>
        <a href="/servicios" class="hover:text-[#DC3545] transition">Servicios</a>
        <a href="/contacto" class="hover:text-[#DC3545] transition">Contacto</a>
        <a href="#" class="inline-flex items-center rounded-xl bg-[#DC3545] px-4 py-2 text-sm font-semibold text-white shadow-soft hover:bg-[#DC3552] justify-center mt-2">
          Iniciar Sesión
        </a>
      </nav>
    </div>

  </div>
</header>



    {{-- Contenido principal --}}
    <main class="max-w-7xl mx-auto px-4 py-10">
        @yield('content')
    </main>

    <footer class="border-t border-slate-200 py-12 mt-16 bg-slate-50">
      <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-10">
        
        <!-- Logo y descripción -->
        <div>
          <h3 class="text-2xl font-bold text-slate-700 mb-2">Topik Trucks</h3>
          <p class="text-slate-600 text-sm">
            Taller especializado en mantenimiento y reparación de motores Diésel en Boca del Río, Veracruz. Calidad, confianza y resultados garantizados.
          </p>
        </div>

        <!-- Contacto -->
        <div>
          <h4 class="text-lg font-semibold text-slate-700 mb-4">Contacto</h4>
          <ul class="text-slate-600 text-sm space-y-2">
            <li class="flex items-center gap-2">
              <span>📍</span> Cjon. Francisco X. Clavijero No. 234, Boca del Río, Ver.
            </li>
            <li class="flex items-center gap-2">
              <span>📞</span> (+52) 229-247-7651
            </li>
            <li class="flex items-center gap-2">
              <span>✉️</span> contacto@topicktrucks.com
            </li>
            <li class="flex items-center gap-2">
              <span>🕒</span> Lunes a Viernes: 8:00 am - 5:00 pm
            </li>
          </ul>
        </div>

        <!-- Servicios rápidos -->
        <div>
          <h4 class="text-lg font-semibold text-slate-700 mb-4">Servicios</h4>
          <ul class="text-slate-600 text-sm space-y-2">
            <li><a href="#servicios" class="hover:text-[#DC3545] transition">Mantenimiento preventivo</a></li>
            <li><a href="#servicios" class="hover:text-[#DC3545] transition">Reparaciones mayores</a></li>
            <li><a href="#servicios" class="hover:text-[#DC3545] transition">Diagnóstico de motor</a></li>
            <li><a href="#contacto" class="hover:text-[#DC3545] transition">Solicitar mantenimiento</a></li>
          </ul>
        </div>

      </div>

      <!-- Copy -->
      <div class="text-center text-slate-600 text-sm mt-10 border-t border-slate-300 pt-6">
        © {{ date('Y') }} Topik Trucks. Todos los derechos reservados.
      </div>
    </footer>


    @stack('scripts')

    <script>
      document.getElementById("year").textContent = new Date().getFullYear();
    </script>
</body>
</html>

