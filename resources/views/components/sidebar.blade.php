{{-- Sidebar --}}
<aside 
    :class="open ? 'translate-x-0' : '-translate-x-full'"
    class="fixed top-0 left-0  z-50 w-64 h-full transition-transform -translate-x-full md:translate-x-0 bg-[#490812]  border-r "
    aria-label="Sidebar"
>
    <div class="h-full flex flex-col justify-between  py-4 overflow-y-auto">
        <div>
            <div class="flex flex-col items-center justify-center text-[#fef2f2]  mb-4 px-4 text-center">
                <h1>Bienvenido</h1>
                <p class="text-2xl font-semibold ">{{ Auth::user()->name }}</p>
            </div>
            <ul class=" font-medium">
            @auth

                <!-- Dashboard -->
                <li>
                    <livewire:private.componentes.nav-link
                        :href="route('dashboard')"
                        text="Dashboard"
                        icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                            </svg>'
                    />
                </li>

                {{-- Mis Datos --}}
                <div x-data="{ misDatosOpen: {{ request()->is('home*')  ? 'true' : 'false' }} }">
                    <button @click="misDatosOpen = !misDatosOpen"
                        class=" px-3 py-3  hover:bg-[#83182c]   w-full text-[#fef2f2] text-left   flex justify-between items-center transition">
                        <span class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            Mis Datos
                        </span>
                        <svg :class="{ 'rotate-180': misDatosOpen }" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="misDatosOpen" x-transition class=" pl-4">
                        <livewire:private.componentes.nav-link
                            :href="route('home')"
                            :text="'Facturación'"/>  
                        <livewire:private.componentes.nav-link
                            :href="route('home')"
                            :text="'Poliza de mantenimiento'"/>  
                        <livewire:private.componentes.nav-link
                            :href="route('home')"
                            :text="'Servicios Adicionales'"/>              
                    </div>

                {{-- Servicios --}}
                <div x-data="{ serviciosOpen: {{ request()->is('home*')  ? 'true' : 'false' }} }">
                    <button @click="serviciosOpen = !serviciosOpen"
                        class=" px-3 py-3  hover:bg-[#83182c]   w-full text-[#fef2f2]  text-left   flex justify-between items-center transition">
                        <span class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008Z" />
                            </svg>
                            Servicios
                        </span>
                        <svg :class="{ 'rotate-180': serviciosOpen }" class="w-4 h-4 transition-transform" fill="none"   stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="serviciosOpen" x-transition class="  pl-4">
                        <livewire:private.componentes.nav-link
                            :href="route('home')"
                            :text="'Servicios'"/>  
                        <livewire:private.componentes.nav-link
                            :href="route('home')"
                            :text="'Servicios Agendados'"/>  
                        <livewire:private.componentes.nav-link
                            :href="route('home')"
                            :text="'Servicios Adicionales'"/>             
                </div>

                @if (auth()->user()->tienePerfil('Administrador'))
                {{-- Usuarios --}}
                    <div x-data="{ usuariosOpen: {{ request()->is('usuarios*') || request()->is('perfiles*') || request()->is('permisos*') ? 'true' : 'false' }} }">
                    <button @click="usuariosOpen = !usuariosOpen"
                        class=" px-3 py-3  hover:bg-[#83182c]  w-full text-[#fef2f2]  text-left   flex justify-between items-center transition">
                                <span class="flex gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.242 5.992h12m-12 6.003H20.24m-12 5.999h12M4.117 7.495v-3.75H2.99m1.125 3.75H2.99m1.125 0H5.24m-1.92 2.577a1.125 1.125 0 1 1 1.591 1.59l-1.83 1.83h2.16M2.99 15.745h1.125a1.125 1.125 0 0 1 0 2.25H3.74m0-.002h.375a1.125 1.125 0 0 1 0 2.25H2.99" />
                                    </svg>
                                    Usuarios
                                </span>
                                <svg :class="{ 'rotate-180': usuariosOpen }" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                        <div x-show="usuariosOpen" x-transition class=" pl-4">
                            <livewire:private.componentes.nav-link
                                :href="route('usuarios.index')"
                                :text="'Usuarios'"
                            />  
                            <livewire:private.componentes.nav-link
                                :href="route('perfiles.index')"
                                :text="'Perfiles'"
                    />  
                    <livewire:private.componentes.nav-link
                                :href="route('permisos.index')"
                                :text="'Permisos'"
                    />  
            
                </div>
                @endif
            </ul>
        </div>

            <!-- Ajustes -->
            <li>
              <livewire:private.componentes.nav-link
                    :href="route('home')"
                    text="Ajustes"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                '/>
            </li>

        @endauth
    </div>
</aside>




