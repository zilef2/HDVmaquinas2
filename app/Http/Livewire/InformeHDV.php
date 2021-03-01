<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InformeHDV extends Component
{

    public $id_a;

    public function mount($id_a)
    {
        $this->id_a=$id_a;
    }
    public function render()
    {
        return view('livewire.informeEquipos.informe-h-d-v');
    }
}
