@extends('layouts.proveedores.main')

@section('title', 'Proveedores | Topick Trucks')

@section('content')

<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
  
  <!-- Imagen con overlay oscuro -->
  <div class="absolute inset-0 -z-10">
    <img 
      src="{{asset('https://cdn.pixabay.com/photo/2021/10/18/12/38/engine-6720924_1280.jpg')}}"
      class="w-full h-full object-cover object-center opacity-40"
    >
      {{-- <div class="absolute inset-0  bg-gradient-to-r from-[#DC3545]/50 via-[#E35D6A]/50 to-[#F35D6A]/40"></div> --}}
  </div>

  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">
        Bienvenido al Portal de Proveedores
      </h2>
      <p class="mt-8 text-lg font-medium text-gray-300 sm:text-xl">
        Acceda a beneficios administrativos, gestione sus equipos, consulte estados y mantenga el control de sus operaciones de manera clara y eficiente.
      </p>
    </div>

    <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
      
      <!-- Links -->
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold text-white sm:grid-cols-2 md:flex lg:gap-x-10">
        <a href="#">Dashboard →</a>
        <a href="#">Gestión de equipos →</a>
        <a href="#">Documentación →</a>
        <a href="#">Soporte y ayuda →</a>
      </div>

      <!-- Stats -->
      <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base text-gray-300">Proveedores registrados</dt>
          <dd class="text-4xl font-semibold tracking-tight text-white">12</dd>
        </div>
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base text-gray-300">Equipos administrados</dt>
          <dd class="text-4xl font-semibold tracking-tight text-white">300+</dd>
        </div>
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base text-gray-300">Procesos activos</dt>
          <dd class="text-4xl font-semibold tracking-tight text-white">40</dd>
        </div>
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base text-gray-300">Estados actualizados</dt>
          <dd class="text-4xl font-semibold tracking-tight text-white">100%</dd>
        </div>
      </dl>

    </div>

  </div>
</div>


<section class="bg-white ">
  <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
      
      <div class="max-w-screen-md mb-8 lg:mb-16">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">
              Servicios disponibles para proveedores
          </h2>
          <p class="text-gray-500 sm:text-xl ">
              Accede fácilmente a tus facturas, pólizas, información personal y más. 
              Optimiza la administración de tus equipos con herramientas diseñadas para tu negocio.
          </p>
      </div>

      <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">

          <!-- FACTURACIÓN -->
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 
                  lg:h-12 lg:w-12 dark:bg-primary-900">
                  <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                       fill="currentColor" viewBox="0 0 20 20">
                      <path d="M3 3h14v14H3V3zm3 3v2h8V6H6zm0 4v2h8v-2H6z"/>
                  </svg>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Facturación</h3>
              <p class="text-gray-500 ">
                  Consulta, descarga y administra tus facturas emitidas y pendientes.
              </p>
          </div>

          <!-- PÓLIZAS DE MANTENIMIENTO -->
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 
                  lg:h-12 lg:w-12 dark:bg-primary-900">
                  <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                       fill="currentColor" viewBox="0 0 20 20">
                      <path d="M4 4h12v12H4V4zm6 2l4 4-4 4-4-4 4-4z"/>
                  </svg>
              </div>
              <h3 class="mb-2 text-xl font-bold ">Pólizas de mantenimiento</h3>
              <p class="text-gray-500 ">
                  Revisa el estado de tus pólizas, vigencias, renovaciones y coberturas.
              </p>
          </div>

          <!-- MIS DATOS -->
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 
                  lg:h-12 lg:w-12 dark:bg-primary-900">
                  <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                       fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 10a4 4 0 100-8 4 4 0 000 8zm0 2c-4 0-6 2-6 4v2h12v-2c0-2-2-4-6-4z"/>
                  </svg>
              </div>
              <h3 class="mb-2 text-xl font-bold ">Mis datos</h3>
              <p class="text-gray-500 ">
                  Actualiza tu información personal, contacto, documentos y preferencias.
              </p>
          </div>

          <!-- AJUSTES -->
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 
                  lg:h-12 lg:w-12 dark:bg-primary-900">
                  <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                       fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 
                        2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 
                        01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 
                        012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 
                        012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 
                        01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 
                        01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 
                        0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"/>
                  </svg>
              </div>
              <h3 class="mb-2 text-xl font-bold ">Ajustes</h3>
              <p class="text-gray-500 ">
                  Configura preferencias del portal, notificaciones y opciones de acceso.
              </p>
          </div>

          <!-- SERVICIOS ADICIONALES -->
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 
                  lg:h-12 lg:w-12 dark:bg-primary-900">
                  <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                       fill="currentColor" viewBox="0 0 20 20">
                      <path d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 
                      00-2-2H5zm2 3h6v2H7V6zm0 4h6v2H7v-2zm0 4h6v2H7v-2z"/>
                  </svg>
              </div>
              <h3 class="mb-2 text-xl font-bold ">Servicios adicionales</h3>
              <p class="text-gray-500 ">
                  Acceso a servicios especiales, complementos y herramientas premium.
              </p>
          </div>

      </div>

  </div>
</section>




@endsection
