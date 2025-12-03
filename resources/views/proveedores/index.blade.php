@extends('layouts.proveedores.main')

@section('title', 'Proveedores | Topick Trucks')

@section('content')

    <!-- ABOUT -->
    <div id="about" class="flex items-center p-10">
    <!-- Hero Mejorado -->
      <section class="relative overflow-hidden">
        <div class="container mx-auto px-4 py-20">
          <div class="flex  gap-10">
            
            <!-- Texto principal -->
            <div>
              <!-- Título principal -->
              <h1 class="mt-4 text-3xl sm:text-4xl md:text-6xl font-extrabold leading-tight tracking-tight">
                Mantenimiento <span class="text-[#DC3545]">certificado</span> para <span class="text-[#DC3545]">Motores Diésel</span>
              </h1>

              <!-- Subtítulo / Beneficio -->
              <p class="mt-4 text-lg text-slate-600 max-w-prose">
                Garantizamos <strong>rendimiento, seguridad y durabilidad</strong> para tus motores de carga. Nuestro equipo de técnicos certificados asegura reparaciones profesionales y confiables, con historial documentado de cada servicio.
              </p>

              <!-- Botones CTA -->
              <div class="mt-6 flex flex-wrap gap-3">
                <a href="#contacto" class="inline-flex items-center rounded-xl bg-[#DC3545] px-5 py-3 font-semibold text-white shadow-soft hover:bg-brand-700">
                  Solicita tu mantenimiento
                </a>
                <a href="#servicios" class="inline-flex items-center rounded-xl border border-slate-300 px-5 py-3 font-semibold hover:bg-slate-100">
                  Conoce nuestros servicios
                </a>
              </div>
        
            </div>

            <!-- Imagen / Visual de Servicio de Mantenimiento -->
            <div class="relative ">
              <div class="">
                <div class="grid xl:w-full grid-cols-1 sm:grid-cols-3 gap-4">
                  
                  <!-- Tarjeta 1: Motores atendidos -->
                  <div class="aspect-[4/3] w-full rounded-3xl 
                              bg-gradient-to-tr from-[#DC3545]/80 to-slate-100 
                              shadow-soft border border-slate-200 p-4">
                    <div>
                      <div class="text-xs font-semibold text-slate-500">Motores atendidos</div>
                      <div class="mt-2 text-2xl font-bold text-[#DC3545]">+350</div>
                    </div>
                    <div class="mt-4 text-sm text-slate-500">
                      Historial completo de motores Diésel atendidos con éxito
                    </div>
                  </div>

                  <!-- Tarjeta 2: Tiempo promedio de diagnóstico -->
                  <div class="rounded-2xl bg-white shadow-soft border border-slate-200 bg-gradient-to-tr from-[#DC3545]/80 to-slate-100 
                               p-4 flex flex-col justify-between">
                    <div>
                      <div class="text-xs font-semibold text-slate-500">Tiempo promedio de diagnóstico</div>
                      <div class="mt-2 text-2xl font-bold text-[#DC3545]">24-48 hrs</div>
                    </div>
                    <div class="mt-4 text-sm text-slate-500">
                      Diagnóstico rápido y confiable de cada motor
                    </div>
                  </div>

                  <!-- Tarjeta 4: Técnicos certificados -->
                  <div class="rounded-2xl bg-white shadow-soft border border-slate-200 bg-gradient-to-tr from-[#DC3545]/80 to-slate-100 
                              p-4 flex flex-col justify-between">
                    <div>
                      <div class="text-xs font-semibold text-slate-500">Técnicos certificados</div>
                      <div class="mt-2 text-2xl font-bold text-[#DC3545]">+15 años</div>
                    </div>
                    <div class="mt-4 text-sm text-slate-500">
                      Experiencia y profesionalismo garantizados en cada reparación
                    </div>
                  </div>

                  

                  <!-- Tarjeta 5: Garantía de servicio -->
                  <div class="rounded-2xl  border border-slate-200 bg-gradient-to-tr from-[#DC3545]/80 to-slate-100 
                              shadow-soft p-4 flex flex-col justify-between col-span-3">
                    <div>
                      <div class="text-xs font-semibold text-slate-500">Garantía de servicio</div>
                      <div class="mt-2 text-2xl font-bold text-[#DC3545]">100%</div>
                    </div>
                    <div class="mt-4 text-sm text-slate-500">
                      Todos nuestros servicios están respaldados por garantía de calidad y confianza
                    </div>
                  </div>

                  {{-- Tarjeta 6: TEXTO --}}
                  <div class="col-span-3 text-white ">
                    <h1>Texto</h1>
                  </div>

                                
                  <!-- Tarjeta 1: Motores atendidos -->
                  <div class="aspect-[4/3] w-full rounded-3xl 
                              bg-gradient-to-tr from-[#DC3545]/80 to-slate-100 
                              shadow-soft border border-slate-200 p-4">
                    <div>
                      <div class="text-xs font-semibold text-slate-500">Motores atendidos</div>
                      <div class="mt-2 text-2xl font-bold text-[#DC3545]">+350</div>
                    </div>
                    <div class="mt-4 text-sm text-slate-500">
                      Historial completo de motores Diésel atendidos con éxito
                    </div>
                  </div>

                  <!-- Tarjeta 2: Tiempo promedio de diagnóstico -->
                  <div class="rounded-2xl bg-white shadow-soft border border-slate-200 bg-gradient-to-tr from-[#DC3545]/80 to-slate-100 
                               p-4 flex flex-col justify-between">
                    <div>
                      <div class="text-xs font-semibold text-slate-500">Tiempo promedio de diagnóstico</div>
                      <div class="mt-2 text-2xl font-bold text-[#DC3545]">24-48 hrs</div>
                    </div>
                    <div class="mt-4 text-sm text-slate-500">
                      Diagnóstico rápido y confiable de cada motor
                    </div>
                  </div>

                  <!-- Tarjeta 4: Técnicos certificados -->
                  <div class="rounded-2xl bg-white shadow-soft border border-slate-200 bg-gradient-to-tr from-[#DC3545]/80 to-slate-100 
                              p-4 flex flex-col justify-between">
                    <div>
                      <div class="text-xs font-semibold text-slate-500">Técnicos certificados</div>
                      <div class="mt-2 text-2xl font-bold text-[#DC3545]">+15 años</div>
                    </div>
                    <div class="mt-4 text-sm text-slate-500">
                      Experiencia y profesionalismo garantizados en cada reparación
                    </div>
                  </div>

                  {{-- Tarjeta 7: --}}

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>


@endsection
