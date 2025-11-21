@extends('layouts.main')

@section('title', 'Servicios | Topick Trucks')

@section('content')

<!-- Hero Servicios -->
<section class="relative overflow-hidden bg-slate-50">
  <div class="container mx-auto px-4 py-20">
    <div class="text-center max-w-3xl mx-auto">
      <h1 class="text-4xl md:text-5xl font-extrabold text-slate-800">
        Nuestros Servicios de Mantenimiento y Reparación
      </h1>
      <p class="mt-4 text-lg text-slate-600">
        Soluciones especializadas para mantener tus motores Diésel en óptimo estado, garantizando eficiencia, potencia y durabilidad.
      </p>
    </div>
  </div>
</section>

<!-- Servicio 1: Mantenimiento de Sistema SCR -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4 max-w-4xl">
    <div class="flex flex-col md:flex-row items-center gap-8">
      <img src="https://www.grupoherres.com.mx/wp-content/uploads/2019/03/limpiador-inyectores.jpg" alt="Mantenimiento de sistema SCR" class="rounded-2xl w-full md:w-1/2 h-64 object-cover shadow-md">
      <div class="md:w-1/2">
        <h2 class="text-3xl font-extrabold text-slate-800 mb-4">Mantenimiento de Sistema SCR</h2>
        <p class="text-slate-600 mb-4">
          Nos encargamos de la limpieza, calibración y diagnóstico del sistema de reducción catalítica selectiva (SCR), asegurando el correcto funcionamiento y reducción de emisiones contaminantes.
        </p>
        <ul class="list-disc list-inside text-slate-600 space-y-2 mb-4">
          <li>Limpieza de inyectores y catalizadores</li>
          <li>Calibración electrónica del sistema</li>
          <li>Optimización de eficiencia y emisiones</li>
        </ul>
        <a href="#contacto" class="inline-flex items-center rounded-xl bg-[#DC3545] px-6 py-3 text-white font-semibold hover:bg-brand-700 transition">
          Solicitar servicio
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Servicio 2: Reparaciones Mayores -->
<section class="py-20 bg-slate-50">
  <div class="container mx-auto px-4 max-w-4xl">
    <div class="flex flex-col md:flex-row-reverse items-center gap-8">
      <img src="{{ asset('images/reparacionMayor.jpeg') }}" alt="Reparaciones mayores de motor Diésel" class="rounded-2xl w-full md:w-1/2 h-64 object-cover shadow-md">
      <div class="md:w-1/2">
        <h2 class="text-3xl font-extrabold text-slate-800 mb-4">Reparaciones Mayores</h2>
        <p class="text-slate-600 mb-4">
          Reconstrucción completa de motores Diésel, reemplazo de componentes críticos y restauración del rendimiento original de tu maquinaria.
        </p>
        <ul class="list-disc list-inside text-slate-600 space-y-2 mb-4">
          <li>Reemplazo de pistones, bielas y bloque de motor</li>
          <li>Rectificación y ajuste de cilindros</li>
          <li>Pruebas de rendimiento y eficiencia</li>
        </ul>
        <a href="#contacto" class="inline-flex items-center rounded-xl bg-[#DC3545] px-6 py-3 text-white font-semibold hover:bg-brand-700 transition">
          Solicitar servicio
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Servicio 3: Diagnóstico de Motor -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4 max-w-4xl">
    <div class="flex flex-col md:flex-row items-center gap-8">
      <img src="https://www.autoavance.co/wp-content/uploads/2021/09/unidad-de-control-de-motor-pruebas.jpeg" alt="Diagnóstico de motor Diésel" class="rounded-2xl w-full md:w-1/2 h-64 object-cover shadow-md">
      <div class="md:w-1/2">
        <h2 class="text-3xl font-extrabold text-slate-800 mb-4">Diagnóstico de Motor</h2>
        <p class="text-slate-600 mb-4">
          Evaluación completa para identificar fallas, optimizar el consumo de combustible y prevenir averías en motores Diésel.
        </p>
        <ul class="list-disc list-inside text-slate-600 space-y-2 mb-4">
          <li>Diagnóstico electrónico y mecánico</li>
          <li>Reporte de fallas y recomendaciones</li>
          <li>Prevención de fallas futuras</li>
        </ul>
        <a href="#contacto" class="inline-flex items-center rounded-xl bg-[#DC3545] px-6 py-3 text-white font-semibold hover:bg-brand-700 transition">
          Solicitar diagnóstico
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
