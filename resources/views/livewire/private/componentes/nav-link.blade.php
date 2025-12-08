<div>
    <a href="{{ $href }}" class="flex items-center gap-2 {{ $classes }} text-gray-100">

        {{-- ICONO --}}
        @if ($icon)
            {!! $icon !!}
        @endif

        <span>{{ $text }}</span>
    </a>
</div>
