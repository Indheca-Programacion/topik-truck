@extends('layouts.app')

@section('title', 'Crear Usuario | Topick Trucks')

@section('content')

<x-card class="max-w-2xl">

    {{-- Encabezado del card (slot nombrado) --}}
    <x-slot:header>
        <h2 class="text-xl font-semibold text-gray-700">Crear Usuario</h2>
    </x-slot:header>

    <div class="mt-6 border rounded  p-6">

        <!-- Mostrar errores generales -->
        @if ($errors->any())
            <div class="mb-4 bg-red-500/30 text-red-700 p-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('usuarios.store') }}" method="POST" id="form-create-user">
            @csrf
            <h3 class="text-lg font-semibold  mb-4">Datos del Usuario</h3>

            <!-- Nombre -->
            <div class="mb-4">
                <label class="block font-medium ">Nombre</label>
                <input 
                    name="name" 
                    value="{{ old('name') }}" 
                    class="w-full rounded-lg bg-white/20  px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300" 
                >
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block font-medium ">Email</label>
                <input 
                    name="email" 
                    type="email" 
                    value="{{ old('email') }}" 
                    class="w-full rounded-lg bg-white/20 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300" 
                >
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Contraseña -->
            <div class="mb-4">
                <label class="block font-medium ">Contraseña</label>
                <input 
                    name="password" 
                    type="password" 
                    class="w-full rounded-lg bg-white/20  px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300" 
                >
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirmar Contraseña -->
            <div class="mb-4">
                <label class="block font-medium ">Confirmar Contraseña</label>
                <input 
                    name="password_confirmation" 
                    type="password" 
                    class="w-full rounded-lg bg-white/20  px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300" 
                >
            </div>


        </form>
    </div>

    <x-slot:footer>
        <div class="flex justify-end mt-6">
            <a href="{{ route('usuarios.index') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-300 rounded hover:bg-white/30 transition">
                Cancelar
            </a>
            <button
                type="submit"
                form="form-create-user"
                class="ml-4 inline-flex items-center px-4 py-2 bg-green-600 text-white rounded hover:bg-cyan-600 transition">
                Guardar
            </button>
        </div>
    </x-slot:footer>
</x-card>


@endsection
