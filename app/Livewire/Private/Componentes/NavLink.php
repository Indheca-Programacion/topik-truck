<?php

namespace App\Livewire\Private\Componentes;

use Livewire\Component;
use Illuminate\Support\Facades\Request;

class NavLink extends Component
{
    public string $href;
    public string $text;

    public string $baseClasses = 'block px-3 py-3  hover:bg-red-700 transition';
    public string $activeClasses = 'bg-red-700';

    public function mount($href, $text)
    {
        $this->href = $href;
        $this->text = $text;
    }

    public function render()
    {
        $path = parse_url($this->href, PHP_URL_PATH) ?? $this->href;
        $pathToCheck = ltrim($path, '/') . '*';

        $isActive = Request::is($pathToCheck);

        $classes = $this->baseClasses . ($isActive ? ' ' . $this->activeClasses : '');

        return view('livewire.private.componentes.nav-link', [
            'classes' => $classes
        ]);
    }
}
