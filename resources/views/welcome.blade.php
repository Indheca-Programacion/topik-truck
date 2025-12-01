@extends('layouts.main')

@section('title', 'Inicio | Topick Trucks')

@section('content')

  @livewire('public.welcomen.hero')
    
  @livewire('public.welcomen.servicios')

  @livewire('public.welcomen.beneficios')

  @livewire('public.welcomen.procesos')

  @livewire('public.welcomen.nosotros')

  @livewire('public.welcomen.preguntas-frecuentes')

@endsection
