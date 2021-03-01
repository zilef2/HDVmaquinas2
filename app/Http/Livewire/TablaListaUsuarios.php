<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TablaListaUsuarios extends Component
{

    public $activar=true;

    public function activar_filtro()
    {
        $this->activar=false;

    }
    public function desactivar_filtro()
    {
        $this->activar=true;
    }
    public function render()
    {

        return view('livewire.tabla-lista-usuarios');
    }
}
