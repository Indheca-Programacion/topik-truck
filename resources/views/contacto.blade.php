@extends('layouts.main')

@section('title', 'Contacto | Topick Trucks')

@section('content')
<!-- CTA Contacto: Solicita tu mantenimiento -->
<section id="contacto" class="py-16 sm:py-20 bg-slate-50">
  <div class="container mx-auto px-4">
    <div class="rounded-3xl border border-slate-200 bg-white p-6 sm:p-10 shadow-soft">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 items-center">
        
        <!-- Información -->
        <div>
          <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
            Solicita tu mantenimiento certificado
          </h2>
          <p class="mt-3 text-slate-600 text-sm sm:text-base">
            Cuéntanos sobre tu motor o maquinaria y nuestro equipo programará tu servicio de mantenimiento o reparación en menos de 24 horas.
          </p>
          <div class="mt-6 space-y-2 text-sm text-slate-700">
            <div class="flex items-center gap-2">
              <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
              Técnicos certificados y experiencia garantizada
            </div>
            <div class="flex items-center gap-2">
              <span class="h-2.5 w-2.5 rounded-full bg-indigo-500"></span>
              Garantía de servicio y resultados confiables
            </div>
          </div>
        </div>
        
        <!-- Formulario -->
        <form class="grid gap-4 w-full">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 min-w-0">
            <label class="grid gap-1 text-sm w-full">
              <span>Nombre</span>
              <input
                type="text"
                required
                class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2 outline-none focus:ring-2 focus:ring-brand-500"
                placeholder="Tu nombre"
              />
            </label>
            <label class="grid gap-1 text-sm w-full">
              <span>Email</span>
              <input
                type="email"
                required
                class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2 outline-none focus:ring-2 focus:ring-brand-500"
                placeholder="tu@email.com"
              />
            </label>
          </div>

          <label class="grid gap-1 text-sm w-full">
            <span>Servicio de interés</span>
            <select
              class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2 outline-none focus:ring-2 focus:ring-brand-500"
            >
              <option>Mantenimiento preventivo</option>
              <option>Reparación mayor</option>
              <option>Diagnóstico de motor</option>
              <option>Otros servicios de maquinaria</option>
            </select>
          </label>

          <label class="grid gap-1 text-sm w-full">
            <span>Descripción del motor o maquinaria</span>
            <textarea
              rows="4"
              class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2 outline-none focus:ring-2 focus:ring-brand-500"
              placeholder="Indica modelo, número de serie, problemas detectados..."
            ></textarea>
          </label>

          <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3">
            <button
              type="submit"
              class="inline-flex items-center rounded-xl bg-[#DC3545] px-5 py-3 font-semibold text-white shadow-soft hover:bg-brand-700 w-full sm:w-auto justify-center"
            >
              Solicitar mantenimiento
            </button>
            <a
              href="mailto:contacto@topicktrucks.com"
              class="text-sm underline hover:no-underline"
            >
              o escríbenos a contacto@topicktrucks.com
            </a>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>
@endsection
