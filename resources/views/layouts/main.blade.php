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
    <header
      class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-slate-200"
    >
      <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
          <a href="#" class="flex items-center gap-2">
            <span
              class="inline-flex h-9 w-9 items-center justify-center rounded-2xl bg-brand-600 text-white font-bold shadow-soft"
              >A</span
            >
            <span class="font-extrabold text-lg tracking-tight"
              >Topik Trucks</span
            >
          </a>
          <nav class="hidden md:flex items-center gap-6 font-medium">
            <a href="/" class="hover:text-brand-600">Inicio</a>
            <a href="/servicios" class="hover:text-brand-600">Servicios</a>
            <a href="/contacto" class="hover:text-brand-600">Contacto</a>
          </nav>
          <div class="flex items-center gap-3">
            <a
              href="#contacto"
              class="hidden sm:inline-flex items-center rounded-xl border border-slate-300 px-4 py-2 text-sm font-semibold hover:bg-slate-100"
              >Agenda una llamada</a
            >
            <a
              href="#contacto"
              class="inline-flex items-center rounded-xl bg-brand-500 px-4 py-2 text-sm font-semibold text-white shadow-soft hover:bg-brand-600"
              >Agendar Cita</a
            >
          </div>
        </div>
      </div>
    </header>



    {{-- Contenido principal --}}
    <main class="max-w-7xl mx-auto px-4 py-10">
        @yield('content')
    </main>

    <footer class="border-t border-slate-200 py-12 mt-16 bg-slate-50">
      <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-10">
        
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
              <span>📞</span> (+52) 229-229-0382
            </li>
            <li class="flex items-center gap-2">
              <span>✉️</span> contacto@topicktrucks.com
            </li>
            <li class="flex items-center gap-2">
              <span>🕒</span> Lunes a Viernes: 8:00 am - 6:00 pm
            </li>
          </ul>
        </div>

        <!-- Servicios rápidos -->
        <div>
          <h4 class="text-lg font-semibold text-slate-700 mb-4">Servicios</h4>
          <ul class="text-slate-600 text-sm space-y-2">
            <li><a href="#servicios" class="hover:text-brand-600 transition">Mantenimiento preventivo</a></li>
            <li><a href="#servicios" class="hover:text-brand-600 transition">Reparaciones mayores</a></li>
            <li><a href="#servicios" class="hover:text-brand-600 transition">Diagnóstico de motor</a></li>
            <li><a href="#contacto" class="hover:text-brand-600 transition">Solicitar mantenimiento</a></li>
          </ul>
        </div>

        <!-- Redes sociales -->
        <div>
          <h4 class="text-lg font-semibold text-slate-700 mb-4">Síguenos</h4>
          <div class="flex space-x-4 text-slate-600">
            <a href="#" class="hover:text-cyan-400 transition flex items-center gap-1">
              <i class="fab fa-facebook-f"></i> Facebook
            </a>
            <a href="#" class="hover:text-pink-500 transition flex items-center gap-1">
              <i class="fab fa-instagram"></i> Instagram
            </a>
            <a href="#" class="hover:text-blue-500 transition flex items-center gap-1">
              <i class="fab fa-linkedin-in"></i> LinkedIn
            </a>
          </div>
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

