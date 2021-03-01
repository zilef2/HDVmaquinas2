<?php

namespace App\Http\Livewire;

use App\Models\Equipo;
use App\Models\equipos_mantenimientos;
use Carbon\Carbon;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TablaMaquinaAlertas extends LivewireDatatable
{

    public $hideable = 'select';
//    public $exportable = true;


    public function builder()
    {

        $equiposConMatenimiento=equipos_mantenimientos::all()->pluck('equipo_id')->toArray();
        return Equipo::query()
            ->whereIn('id',$equiposConMatenimiento);
    }

    public function columns()
    {
        return [
            Column::name('nombre')
                ->label('Nombre')
                ->filterable(),

            DateColumn::name('updated_at')
                ->label('Fecha')
                ->hide(),

            Column::callback(['updated_at'], function ($updated_at) {
                return Carbon::createFromDate($updated_at)->diffForHumans(Carbon::now());
            })->label('Actualizado ')->hide(),

            Column::name('serial')
                ->label('serial'),

            Column::name('aquien_vendio')
                ->label('se vendió a'),

            BooleanColumn::name('al_dia')
                ->label('al Día'),

            DateColumn::name('fecha_ultimo_mant')
                ->label('Ultimo mantenimiento')
                ->format('d/m/y g:i a')
                ->filterable()
                ->defaultSort('asc'),



            Column::callback(['id', 'nombre'], function ($id, $nombre) {
                return view('livewire.admin-actions', ['id' => $id, 'nombre' => $nombre,'tabla'=>"HDV_Down"]);
            })->label('HDV y descargas'),

            Column::callback(['id' ], function ($id ) {
                return view('livewire.admin-actions', ['id' => $id,'tabla'=>"programa_registrar"]);
            })->label('Mantenimientos'),


        ];
    }

}
