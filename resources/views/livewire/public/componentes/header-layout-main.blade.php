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
