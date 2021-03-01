<div>
    <div class="flex flex-col items-center">
        <div class="">
            <button class="text-white bg-black font-bold py-2 px-3 mx-14 rounded transition duration-100 ease-in-out bg-blue-600 hover:bg-indigo-600 hover:scale-105" wire:click="activar_filtro">Sin mantenimiento</button>
            <button class="text-white bg-black font-bold py-2 px-3 mx-14 rounded transition duration-100 ease-in-out bg-blue-600 hover:bg-indigo-600 hover:scale-105" wire:click="desactivar_filtro">Con mantenimiento</button>
        </div>
    </div>
    @if($activar)
        <livewire:tabla-maquina-alertas/>
    @else
        <livewire:tabla-lista-sin-mante/>
    @endif

</div>
