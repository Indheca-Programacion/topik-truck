@extends('layouts.app')

@section('title', 'Editar Usuario | Topick Trucks')

@section('content')

<x-card class="max-w-6xl">

    {{-- Encabezado del card (slot nombrado) --}}
    <x-slot:header>
        <h2 class="text-xl font-semibold text-gray-700">Editar Usuario</h2>
    </x-slot:header>

   <div class=" mt-6 grid grid-cols-1 lg:grid-cols-4 gap-6 ">
        <form action="{{ route('usuarios.update', $usuario) }}" method="POST" class="lg:col-span-4 ">
            @csrf @method('PUT')

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

                {{-- Columna 1: Datos del Usuario --}}
                <div class="lg:col-span-2 rounded-lg border p-6">
                    <h3 class="text-lg font-semibold  mb-4">Datos del Usuario</h3>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Nombre</label>
                        <input name="name" value="{{ $usuario->name }}" 
                            class="w-full rounded-lg bg-white/20  px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium  mb-1">Email</label>
                        <input name="email" value="{{ $usuario->email }}" type="email"
                            class="w-full rounded-lg bg-white/20  px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300" required>
                    </div>

                    <div class="flex justify-end mt-6">
                        <a href="{{ route('usuarios.index') }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-300 rounded hover:bg-white/30 transition">
                            Cancelar
                        </a>
                        <button
                            class="ml-4 inline-flex items-center px-4 py-2 bg-green-600 text-white rounded hover:bg-cyan-600 transition">
                            Actualizar
                        </button>
                    </div>
                </div>

                {{-- Columna 2-3: Perfiles asignados --}}
                <div class="lg:col-span-2 rounded-lg border p-6 h-fit">
                    <h3 class="text-lg font-semibold  mb-4">Perfiles Asignados</h3>

                    <div class="grid grid-cols-1 gap-4">
                        @foreach($perfiles as $perfil)
                            <label 
                                class="rounded-lg border hover:border-cyan-400 transition-all duration-150  p-4 flex items-start gap-3 cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="perfiles[]" 
                                    value="{{ $perfil->id }}" 
                                    {{ $usuario->perfiles->contains($perfil->id) ? 'checked' : '' }}
                                    class="mt-1 accent-cyan-500"
                                >
                                <div>
                                    <p class="font-medium ">{{ $perfil->nombre }}</p>
                                    <p class="text-sm ">{{ $perfil->descripcion }}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
        </form>
    </div>

</x-card>

@endsection
