@extends('layouts.main')

@section('title', 'Inicio | Topick Trucks')

@section('content')

  <!-- Hero Mejorado -->
  <section class="relative overflow-hidden">
    <div class="absolute inset-0 -z-10 bg-gradient-to-b from-brand-50 via-white to-white"></div>
    <div class="container mx-auto px-4 py-20">
      <div class="grid md:grid-cols-2 items-center gap-10">
        
        <!-- Texto principal -->
        <div>
          <!-- Badge / Destacado -->
          <span class="inline-flex items-center gap-2 rounded-full border border-brand-200 bg-white px-3 py-1 text-xs font-semibold text-brand-700">
            <span class="h-2 w-2 rounded-full bg-brand-500"></span>
            Diagnóstico & Reparaciones Certificadas
            JOSUE PEREZ
          </span>

          <!-- Título principal -->
          <h1 class="mt-4 text-4xl md:text-6xl font-extrabold leading-tight tracking-tight">
            Mantenimiento <span class="text-brand-600">certificado</span> para <span class="text-brand-600">Motores Diésel</span>
          </h1>

          <!-- Subtítulo / Beneficio -->
          <p class="mt-4 text-lg text-slate-600 max-w-prose">
            Garantizamos <strong>rendimiento, seguridad y durabilidad</strong> para tus motores de carga. Nuestro equipo de técnicos certificados asegura reparaciones profesionales y confiables, con historial documentado de cada servicio.
          </p>

          <!-- Botones CTA -->
          <div class="mt-6 flex flex-wrap gap-3">
            <a href="#contacto" class="inline-flex items-center rounded-xl bg-brand-600 px-5 py-3 font-semibold text-white shadow-soft hover:bg-brand-700">
              Solicita tu mantenimiento
            </a>
            <a href="#servicios" class="inline-flex items-center rounded-xl border border-slate-300 px-5 py-3 font-semibold hover:bg-slate-100">
              Conoce nuestros servicios
            </a>
          </div>

          <!-- Beneficios rápidos -->
          <div class="mt-6 flex flex-col sm:flex-row gap-4 text-sm text-slate-600">
            <div class="flex items-center gap-2">
              <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
              Técnicos certificados y experimentados
            </div>
            <div class="flex items-center gap-2">
              <span class="h-2.5 w-2.5 rounded-full bg-indigo-500"></span>
              Historial de mantenimiento documentado
            </div>
            <div class="flex items-center gap-2">
              <span class="h-2.5 w-2.5 rounded-full bg-yellow-500"></span>
              Garantía de calidad y confiabilidad
            </div>
          </div>
        </div>

        <!-- Imagen / Visual de Servicio de Mantenimiento -->
        <div class="relative">
          <div class="aspect-[4/3] w-full rounded-3xl bg-gradient-to-tr from-slate-100 to-brand-100 shadow-soft border border-slate-200 p-4">
            <div class="grid h-full w-full grid-cols-2 gap-4">
              
              <!-- Tarjeta 1: Motores atendidos -->
              <div class="rounded-2xl bg-white shadow-soft border border-slate-200 p-4 flex flex-col justify-between">
                <div>
                  <div class="text-xs font-semibold text-slate-500">Motores atendidos</div>
                  <div class="mt-2 text-2xl font-bold text-brand-600">+350</div>
                </div>
                <div class="mt-4 text-sm text-slate-500">
                  Historial completo de motores Diésel atendidos con éxito
                </div>
              </div>

              <!-- Tarjeta 2: Tiempo promedio de diagnóstico -->
              <div class="rounded-2xl bg-white shadow-soft border border-slate-200 p-4 flex flex-col justify-between">
                <div>
                  <div class="text-xs font-semibold text-slate-500">Tiempo promedio de diagnóstico</div>
                  <div class="mt-2 text-2xl font-bold text-brand-600">24-48 hrs</div>
                </div>
                <div class="mt-4 text-sm text-slate-500">
                  Diagnóstico rápido y confiable de cada motor
                </div>
              </div>

              <!-- Tarjeta 3: Satisfacción del cliente -->
              <div class="col-span-2 rounded-2xl bg-white shadow-soft border border-slate-200 p-4 flex flex-col justify-between">
                <div class="flex items-center justify-between">
                  <div class="text-xs font-semibold text-slate-500">Clientes satisfechos</div>
                  <div class="text-2xl font-bold text-emerald-600">99%</div>
                </div>
                <div class="mt-2 text-sm text-slate-500">
                  Nuestro compromiso es ofrecer resultados de calidad y confianza en cada servicio
                </div>
              </div>

              <!-- Tarjeta 4: Técnicos certificados -->
              <div class="rounded-2xl bg-white shadow-soft border border-slate-200 p-4 flex flex-col justify-between">
                <div>
                  <div class="text-xs font-semibold text-slate-500">Técnicos certificados</div>
                  <div class="mt-2 text-2xl font-bold text-brand-600">+15 años</div>
                </div>
                <div class="mt-4 text-sm text-slate-500">
                  Experiencia y profesionalismo garantizados en cada reparación
                </div>
              </div>

              <!-- Tarjeta 5: Garantía de servicio -->
              <div class="rounded-2xl bg-white shadow-soft border border-slate-200 p-4 flex flex-col justify-between">
                <div>
                  <div class="text-xs font-semibold text-slate-500">Garantía de servicio</div>
                  <div class="mt-2 text-2xl font-bold text-brand-600">100%</div>
                </div>
                <div class="mt-4 text-sm text-slate-500">
                  Todos nuestros servicios están respaldados por garantía de calidad y confianza
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Servicios -->
  <section id="servicios" class="py-20 bg-slate-50">
    <div class="container mx-auto px-4">
      <div class="mx-auto max-w-3xl text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
          Servicios
        </h2>
        <p class="mt-3 text-slate-600">
          Soluciones especializadas para mantener tus motores Diésel en su máximo rendimiento.
        </p>
      </div>

      <div class="mt-10 grid gap-6 md:grid-cols-3">
        <!-- Mantenimiento Sistema SCR -->
        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-soft">
          <div class="flex flex-col items-center text-center">
            <!-- Imagen del servicio -->
            <img
              src="img/scr.jpg"
              alt="Mantenimiento de sistema SCR"
              class="rounded-2xl mb-4 h-40 w-full object-cover"
            />
            <h3 class="text-xl font-bold">Mantenimiento de Sistema SCR</h3>
            <p class="mt-2 text-slate-600 text-sm">
              Limpieza, calibración y diagnóstico del sistema de reducción catalítica selectiva para reducir emisiones y mejorar la eficiencia.
            </p>
            <a
              href="#contacto"
              class="mt-4 inline-flex rounded-xl bg-brand-600 px-4 py-2 text-white font-semibold hover:bg-brand-700"
              >Solicitar servicio</a
            >
          </div>
        </div>

        <!-- Reparaciones Mayores -->
        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-soft">
          <div class="flex flex-col items-center text-center">
            <!-- Imagen del servicio -->
            <img
              src="img/reparacion-mayor.jpg"
              alt="Reparaciones mayores de motor Diésel"
              class="rounded-2xl mb-4 h-40 w-full object-cover"
            />
            <h3 class="text-xl font-bold">Reparaciones Mayores</h3>
            <p class="mt-2 text-slate-600 text-sm">
              Reconstrucción completa de motores Diésel, reemplazo de componentes críticos y ajustes para restablecer el rendimiento original.
            </p>
            <a
              href="#contacto"
              class="mt-4 inline-flex rounded-xl bg-brand-600 px-4 py-2 text-white font-semibold hover:bg-brand-700"
              >Solicitar servicio</a
            >
          </div>
        </div>

        <!-- Diagnóstico de Motor -->
        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-soft">
          <div class="flex flex-col items-center text-center">
            <!-- Imagen del servicio -->
            <img
              src="img/diagnostico.jpg"
              alt="Diagnóstico de motor Diésel"
              class="rounded-2xl mb-4 h-40 w-full object-cover"
            />
            <h3 class="text-xl font-bold">Diagnóstico de Motor</h3>
            <p class="mt-2 text-slate-600 text-sm">
              Análisis electrónico y mecánico para detectar fallas, optimizar consumo y prevenir averías en motores Diésel.
            </p>
            <a
              href="#contacto"
              class="mt-4 inline-flex rounded-xl bg-brand-600 px-4 py-2 text-white font-semibold hover:bg-brand-700"
              >Solicitar diagnóstico</a
            >
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Beneficios -->
  <section class="py-16">
    <div class="container mx-auto px-4">
      <div class="rounded-3xl bg-slate-900 text-white p-10 shadow-soft">
        <div class="grid md:grid-cols-4 gap-6 text-center md:text-left">
          <div>
            <div class="text-3xl font-extrabold">+350</div>
            <div class="mt-1 text-sm opacity-80">
              Motores Diésel atendidos
            </div>
          </div>
          <div>
            <div class="text-3xl font-extrabold">99%</div>
            <div class="mt-1 text-sm opacity-80">
              Clientes satisfechos
            </div>
          </div>
          <div>
            <div class="text-3xl font-extrabold">24-48 hrs</div>
            <div class="mt-1 text-sm opacity-80">
              Tiempo promedio de diagnóstico
            </div>
          </div>
          <div>
            <div class="text-3xl font-extrabold">+15 años</div>
            <div class="mt-1 text-sm opacity-80">
              Experiencia en mantenimiento Diésel
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Proceso -->
  <section id="proceso" class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="mx-auto max-w-3xl text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
          Nuestro proceso
        </h2>
        <p class="mt-3 text-slate-600">
          Así gestionamos tus motores Diésel desde el registro hasta la reparación profesional.
        </p>
      </div>

      <ol class="mt-10 grid gap-6 md:grid-cols-5">
        <!-- Paso 1: Registro de usuario -->
        <li class="rounded-3xl border border-slate-200 bg-slate-50 p-6 text-center">
          <div class="text-sm text-slate-500">Paso 1</div>
          <div class="mt-1 font-bold">Registro de usuario</div>
          <p class="mt-2 text-sm text-slate-600">
            Generamos un usuario en el sistema para acceder a todas las funcionalidades.
          </p>
        </li>

        <!-- Paso 2: Registro de maquinaria -->
        <li class="rounded-3xl border border-slate-200 bg-slate-50 p-6 text-center">
          <div class="text-sm text-slate-500">Paso 2</div>
          <div class="mt-1 font-bold">Registro de maquinaria</div>
          <p class="mt-2 text-sm text-slate-600">
            El usuario registra sus motores y equipos, creando un historial completo de cada unidad.
          </p>
        </li>

        <!-- Paso 3: Creación de servicios -->
        <li class="rounded-3xl border border-slate-200 bg-slate-50 p-6 text-center">
          <div class="text-sm text-slate-500">Paso 3</div>
          <div class="mt-1 font-bold">Creación de servicios</div>
          <p class="mt-2 text-sm text-slate-600">
            El usuario selecciona las refacciones y genera órdenes de mantenimiento preventivo o correctivo.
          </p>
        </li>

        <!-- Paso 4: Agendamiento de cita -->
        <li class="rounded-3xl border border-slate-200 bg-slate-50 p-6 text-center">
          <div class="text-sm text-slate-500">Paso 4</div>
          <div class="mt-1 font-bold">Agendamiento de cita</div>
          <p class="mt-2 text-sm text-slate-600">
            Se programa la visita técnica según disponibilidad y prioridad del motor.
          </p>
        </li>

        <!-- Paso 5: Reparación por personal capacitado -->
        <li class="rounded-3xl border border-slate-200 bg-slate-50 p-6 text-center">
          <div class="text-sm text-slate-500">Paso 5</div>
          <div class="mt-1 font-bold">Reparación profesional</div>
          <p class="mt-2 text-sm text-slate-600">
            El personal capacitado realiza la reparación, actualiza el historial y asegura el óptimo funcionamiento del motor.
          </p>
        </li>
      </ol>
    </div>
  </section>

  <!-- Evidencia -->
  <section id="evidencia" class="py-20 bg-slate-50">
    <div class="container mx-auto px-4">
      <div class="mx-auto max-w-3xl text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
          Evidencia
        </h2>
        <p class="mt-3 text-slate-600">
          Algunos de nuestros trabajos realizados en motores Diésel y sistemas SCR.
        </p>
      </div>

      <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Tarjeta 1 -->
        <article class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft">
          <div class="aspect-[16/10] bg-slate-100">
            <!-- Aquí puedes colocar la imagen real del motor o taller -->
            <img src="img/motor-1.jpg" alt="Reparación de motor Diésel" class="w-full h-full object-cover"/>
          </div>
          <div class="p-5">
            <h3 class="font-bold">Mantenimiento de Sistema SCR</h3>
            <p class="mt-1 text-sm text-slate-600">
              Limpieza y calibración del sistema de reducción de emisiones, asegurando eficiencia y durabilidad.
            </p>
          </div>
        </article>

        <!-- Tarjeta 2 -->
        <article class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft">
          <div class="aspect-[16/10] bg-slate-100">
            <img src="img/motor-2.jpg" alt="Reparación mayor de motor Diésel" class="w-full h-full object-cover"/>
          </div>
          <div class="p-5">
            <h3 class="font-bold">Reparaciones Mayores</h3>
            <p class="mt-1 text-sm text-slate-600">
              Reconstrucción completa de motores Diésel, reemplazo de componentes críticos y restauración del rendimiento original.
            </p>
          </div>
        </article>

        <!-- Tarjeta 3 -->
        <article class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft">
          <div class="aspect-[16/10] bg-slate-100">
            <img src="img/motor-3.jpg" alt="Diagnóstico de motor Diésel" class="w-full h-full object-cover"/>
          </div>
          <div class="p-5">
            <h3 class="font-bold">Diagnóstico de Motor</h3>
            <p class="mt-1 text-sm text-slate-600">
              Análisis completo para detectar fallas, optimizar consumo y prevenir averías futuras.
            </p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Nosotros -->
  <section id="nosotros" class="py-20 bg-slate-50">
    <div class="container mx-auto px-4">
      <div class="grid items-center gap-10 md:grid-cols-2">
        <div>
          <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
            Sobre nuestro taller
          </h2>
          <p class="mt-4 text-lg text-slate-600 max-w-prose">
            Somos un taller ubicado en <strong>Boca del Río, Veracruz, México</strong>, especializado en el <strong>mantenimiento y reparación de motores de carga</strong>.  
            Nuestro equipo de mecánicos altamente capacitados te garantiza un servicio profesional, confiable y de la más alta calidad.
          </p>
          <ul class="mt-4 grid gap-2 text-sm text-slate-700 list-disc pl-5">
            <li>Expertos en diagnóstico, reparación y mantenimiento preventivo de motores Diésel.</li>
            <li>Compromiso con la seguridad, eficiencia y durabilidad de tu maquinaria.</li>
            <li>Atención personalizada, adaptada a las necesidades de cada cliente y tipo de motor.</li>
            <li>Garantía de confianza y resultados medibles en cada servicio.</li>
          </ul>
        </div>
        <div class="aspect-[4/3] w-full rounded-3xl bg-slate-200 shadow-soft">
          <!-- Aquí puedes colocar una imagen real del taller o del equipo -->
          <img src="img/taller-boca-del-rio.jpg" alt="Taller de mantenimiento y reparación de motores en Boca del Río" class="w-full h-full object-cover rounded-3xl"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Preguntas Frecuentes (Alpine.js) -->
  <section id="faq" class="py-20 bg-slate-50" x-data="{ open: null }">
    <div class="container mx-auto px-4">
      <div class="mx-auto max-w-3xl text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
          Preguntas frecuentes
        </h2>
        <p class="mt-3 text-slate-600">
          Resolvemos tus dudas más comunes sobre nuestro taller y servicios de mantenimiento Diésel.
        </p>
      </div>

      <div class="mt-10 space-y-4">
        <!-- FAQ 1 -->
        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm p-6">
          <h3
            class="font-semibold text-lg cursor-pointer flex justify-between items-center"
            @click="open === 1 ? open = null : open = 1"
          >
            ¿Qué tipos de motores reparan?
            <span x-text="open === 1 ? '-' : '+'"></span>
          </h3>
          <p
            class="mt-2 text-slate-600"
            x-show="open === 1"
            x-transition
          >
            Nos especializamos en motores Diésel de carga, incluyendo camiones, maquinaria pesada y flotas industriales.
          </p>
        </div>

        <!-- FAQ 2 -->
        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm p-6">
          <h3
            class="font-semibold text-lg cursor-pointer flex justify-between items-center"
            @click="open === 2 ? open = null : open = 2"
          >
            ¿Ofrecen mantenimiento preventivo?
            <span x-text="open === 2 ? '-' : '+'"></span>
          </h3>
          <p
            class="mt-2 text-slate-600"
            x-show="open === 2"
            x-transition
          >
            Sí, contamos con planes de mantenimiento preventivo para prolongar la vida útil de tus motores y reducir fallas inesperadas.
          </p>
        </div>

        <!-- FAQ 3 -->
        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm p-6">
          <h3
            class="font-semibold text-lg cursor-pointer flex justify-between items-center"
            @click="open === 3 ? open = null : open = 3"
          >
            ¿Cómo puedo agendar una cita?
            <span x-text="open === 3 ? '-' : '+'"></span>
          </h3>
          <p
            class="mt-2 text-slate-600"
            x-show="open === 3"
            x-transition
          >
            Puedes agendar tu cita directamente desde nuestro sistema en línea o contactándonos vía WhatsApp o teléfono.
          </p>
        </div>

        <!-- FAQ 4 -->
        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm p-6">
          <h3
            class="font-semibold text-lg cursor-pointer flex justify-between items-center"
            @click="open === 4 ? open = null : open = 4"
          >
            ¿Garantizan sus reparaciones?
            <span x-text="open === 4 ? '-' : '+'"></span>
          </h3>
          <p
            class="mt-2 text-slate-600"
            x-show="open === 4"
            x-transition
          >
            Sí, todas nuestras reparaciones están respaldadas con garantía de calidad y confianza, realizada por mecánicos certificados.
          </p>
        </div>

        <!-- FAQ 5 -->
        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm p-6">
          <h3
            class="font-semibold text-lg cursor-pointer flex justify-between items-center"
            @click="open === 5 ? open = null : open = 5"
          >
            ¿Realizan diagnóstico a domicilio?
            <span x-text="open === 5 ? '-' : '+'"></span>
          </h3>
          <p
            class="mt-2 text-slate-600"
            x-show="open === 5"
            x-transition
          >
            Sí, ofrecemos diagnóstico en sitio para flotas o motores de difícil traslado, optimizando tiempo y costos.
          </p>
        </div>
      </div>
    </div>
  </section>


@endsection
