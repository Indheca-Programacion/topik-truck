<header class="h-16  border-b shadow-md flex items-center justify-end px-6">

    {{-- ACCIONES DERECHA --}}
    <div class="flex items-center gap-6">

        {{-- NOTIFICACIONES --}}
        <button class="relative text-gray-900 hover:text-gray-600 transition">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.25 18.75a2.25 2.25 0 11-4.5 0m9-6v-2a6 6 0 00-4.5-5.82v-.93a1.5 1.5 0 00-3 0v.93A6 6 0 006 10.75v2L4.5 15h15z" />
            </svg>
        </button>

        {{-- MENÚ DE USUARIO --}}
        <div x-data="{ userMenu: false }" class="relative">

            <button @click="userMenu = !userMenu"
                    class="flex items-center gap-2 text-gray-900 hover:text-gray-600 transition">

                <img src="https://ui-avatars.com/api/?name=User"
                    class="w-8 h-8 rounded-full border border-white/20">

                <span class="text-sm font-medium">{{ auth()->user()->name ?? 'Usuario' }}</span>

                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 9l6 6 6-6" />
                </svg>
            </button>

            {{-- DROPDOWN --}}
            <div x-show="userMenu"
                @click.away="userMenu = false"
                class="absolute right-0 mt-2 w-40 bg-[#1e293b] border border-white/10 rounded-lg shadow-lg py-2 z-50">

                <a href="#"
                class="block px-4 py-2 text-sm text-gray-200 hover:bg-white/10 transition">
                    Perfil
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="w-full text-left px-4 py-2 text-sm text-gray-200 hover:bg-white/10 transition">
                        Cerrar sesión
                    </button>
                </form>
            </div>

        </div>

    </div>
</header>