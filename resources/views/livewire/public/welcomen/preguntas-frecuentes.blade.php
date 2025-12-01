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