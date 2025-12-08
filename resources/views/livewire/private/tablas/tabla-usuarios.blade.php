<div class="overflow-x-auto rounded-lg border">
    <div class="p-4">
        <label for="input-group-1" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M480 272C480 317.9 465.1 360.3 440 394.7L566.6 521.4C579.1 533.9 579.1 554.2 566.6 566.7C554.1 579.2 533.8 579.2 521.3 566.7L394.7 440C360.3 465.1 317.9 480 272 480C157.1 480 64 386.9 64 272C64 157.1 157.1 64 272 64C386.9 64 480 157.1 480 272zM272 416C351.5 416 416 351.5 416 272C416 192.5 351.5 128 272 128C192.5 128 128 192.5 128 272C128 351.5 192.5 416 272 416z"/></svg>
            </div>
            <input type="text"
                wire:model.live="search"
                id="input-group-1"
                class="block w-full max-w-96 ps-9 pe-3 border border-gray-200 text-heading text-sm rounded focus:ring-brand focus:border-brand px-3 py-2.5 placeholder:text-body"
                placeholder="Search">
        </div>
    </div>
    <div class="p-4">
        <table class="min-w-full bg-white">

            <thead class="bg-gray-100 text-gray-700 uppercase text-sm">
                <tr>
                    <th class="px-4 py-3 text-left font-semibold">Nombre</th>
                    <th class="px-4 py-3 text-left font-semibold">Email</th>
                    <th class="px-4 py-3 text-left font-semibold">Acciones</th>
                </tr>
            </thead>

            <tbody class="text-gray-700">
                    @foreach($usuarios as $usuario)
                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-4 py-3">{{ $usuario->name }}</td>
                        <td class="px-4 py-3">{{ $usuario->email }}</td>
                        <td class="px-4 py-3 flex items-center gap-3">
                            <a href="{{ route('usuarios.edit', $usuario) }}"
                            class="text-blue-600 hover:text-blue-800 transition font-medium">
                                Editar
                            </a>

                            <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST"
                                onsubmit="return confirm('¿Eliminar este usuario?')">
                                @csrf @method('DELETE')
                                <button class="text-red-500 hover:text-red-700 transition font-medium">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $usuarios->links() }}
        </div>
    </div>
</div>