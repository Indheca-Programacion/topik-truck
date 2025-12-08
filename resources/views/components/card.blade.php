<div {{ $attributes->merge(['class' => 'bg-white rounded-xl shadow-md border p-6']) }}>
    
    {{-- Header con slot opcional --}}
    @isset($header)
        <div class="flex justify-between items-center border-b pb-4 mb-6">
            {{ $header }}
        </div>
    @endisset

    {{-- Contenido principal --}}
    <div>
        {{ $slot }}
    </div>

        {{-- Header con slot opcional --}}
    @isset($footer)
        <div class="border-t mt-6">
            {{ $footer }}
        </div>
    @endisset
</div>
