{{-- Sidebar --}}
<aside 
    :class="open ? 'translate-x-0' : '-translate-x-full'"
    class="fixed top-0 left-0  z-50 w-64 h-full transition-transform -translate-x-full sm:translate-x-0 bg-[#DC3545] border-r border-gray-200"
    aria-label="Sidebar"
>
   <div class="h-full  py-4 overflow-y-auto">

        <div class="flex flex-col items-center justify-center text-white mb-4">
            <h1>Bienvenido</h1>
            <p class="text-2xl font-semibold">{{ Auth::user()->name }}</p>
        </div>
      <ul class=" font-medium">
        @auth
            <!-- Dashboard -->
            <li>
                <livewire:private.componentes.nav-link
                    :href="route('dashboard')"
                    text="Dashboard"
                >
                </livewire:private.componentes.nav-link>
            </li>

            {{-- Mis Datos --}}
            <div x-data="{ misDatosOpen: {{ request()->is('usuarios*') || request()->is('perfiles*') || request()->is('permisos*') ? 'true' : 'false' }} }">
                <button @click="misDatosOpen = !misDatosOpen"
                    class=" px-3 py-3  hover:bg-red-700  w-full text-gray-100 text-left   flex justify-between items-center transition">
                            <span>Mis Datos</span>
                            <svg :class="{ 'rotate-180': misDatosOpen }" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    <div x-show="misDatosOpen" x-transition class=" pl-4">
                        <livewire:private.componentes.nav-link
                            :href="route('usuarios.index')"
                            :text="'Facturación'"
                        />  
                        <livewire:private.componentes.nav-link
                            :href="route('perfiles.index')"
                            :text="'Poliza de mantenimiento'"
                />  
                                     <livewire:private.componentes.nav-link
                            :href="route('perfiles.index')"
                            :text="'Servicios Adicionales'"
                />  
           
            </div>

            {{-- Servicios --}}
            <div x-data="{ serviciosOpen: {{ request()->is('usuarios*') || request()->is('perfiles*') || request()->is('permisos*') ? 'true' : 'false' }} }">
                <button @click="serviciosOpen = !serviciosOpen"
                    class=" px-3 py-3  hover:bg-red-700  w-full text-gray-100 text-left   flex justify-between items-center transition">
                    <span>Servicios</span>
                    <svg :class="{ 'rotate-180': serviciosOpen }" class="w-4 h-4 transition-transform" fill="none"   stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="serviciosOpen" x-transition class="  pl-4">
                    <livewire:private.componentes.nav-link
                        :href="route('usuarios.index')"
                        :text="'Servicios'"/>  
                    <livewire:private.componentes.nav-link
                        :href="route('perfiles.index')"
                        :text="'Servicios Agendados'"/>  
                    <livewire:private.componentes.nav-link
                        :href="route('perfiles.index')"
                        :text="'Servicios Adicionales'"/>             
            </div>

            <!-- Ajustes -->
            <li>
                <livewire:private.componentes.nav-link
                    :href="route('dashboard')"
                    :text="'Ajustes'"
                />
            </li>

            <hr class="my-4">

            <form method="POST" action="/logout" class="mt-3">
                @csrf
                <button type="submit" class="w-full text-gray-100 text-left block px-3 py-3  hover:bg-red-700 transition">
                    Cerrar sesión
                </button>
            </form>
        @endauth
      </ul>
   </div>
</aside>




