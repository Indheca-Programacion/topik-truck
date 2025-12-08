<?php

namespace App\Livewire\Private\Tablas;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class TablaUsuarios extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $usuarios = User::where(function ($q) {
                $q->where('name', 'like', "%{$this->search}%")
                  ->orWhere('email', 'like', "%{$this->search}%");
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('livewire.private.tablas.tabla-usuarios', compact('usuarios'));
    }
}
