<div>
    <a href="{{ $href }}" class="flex items-center gap-2 {{ $classes }} text-gray-100">

        {{-- SLOT ICON --}}
        @isset($icon)
            <div class="icon">
                {{ $icon }}
            </div>
        @endisset

        <span>{{ $text }}</span>
    </a>
</div>