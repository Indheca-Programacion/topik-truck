<?php

namespace App\Livewire\Private\Componentes;

use Livewire\Component;
use Illuminate\Support\Facades\Request;

class NavLink extends Component
{
    public string $href;
    public string $text;

    public $icon = null; // 👈 agregar ESTO

    public string $baseClasses = 'block px-3 py-3  hover:bg-[#83182c] text-[#fef2f2]  transition';
    public string $activeClasses = 'bg-[#83182c] ';

    public function mount($href, $text, $icon = null)
    {
        $this->href = $href;
        $this->text = $text;
        $this->icon = $icon;
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
