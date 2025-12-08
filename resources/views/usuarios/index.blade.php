@extends('layouts.app')

@section('title', 'Usuarios | Topick Trucks')

@section('content')

<x-card>
    {{-- Encabezado del card (slot nombrado) --}}
    <x-slot:header>
        <h2 class="text-xl font-semibold text-gray-700">Usuarios</h2>

        <a href="{{ route('usuarios.create') }}" 
           class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition">
            + Nuevo usuario
        </a>
    </x-slot:header>

    {{-- Mensaje de éxito --}}
    @if (session('success'))
        <div class="mb-4 px-4 py-2 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tabla --}}

    <livewire:private.tablas.tabla-usuarios />

</x-card>
@endsection
