<?php

namespace App\Http\Livewire;

use App\Models\Equipo;
use App\Models\equipos_mantenimientos;
use Carbon\Carbon;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;


class TablaListaSinMante extends LivewireDatatable
{

    public $hideable = 'select';
//    public $exportable = true;


    public function builder()
    {
        $equiposConMatenimiento=equipos_mantenimientos::all()->pluck('equipo_id')->toArray();
        $todos_equipos=Equipo::all()->pluck('id')->toArray();
        $equiposSinMante=array_diff($todos_equipos,$equiposConMatenimiento);

        return Equipo::query()
            ->whereIn('id',$equiposSinMante);

    }


    public function columns()
    {
        return [


            Column::name('nombre')
                ->label('Nombre')
                ->filterable(),

            DateColumn::name('created_at')
                ->label('Creado en'),



//            DateColumn::name('created_at')
//                ->label('serial'),
//
//            DateColumn::name('created_at')
//                ->label('se vendio a'),
//
//            DateColumn::name('created_at')
//                ->label('foto'),






            Column::callback(['updated_at'], function ($updated_at) {
                return Carbon::createFromDate($updated_at)->diffForHumans(Carbon::now());
            })->label('Hace cuanto'),

//
//            Column::callback(['id', 'nombre'], function ($id, $nombre) {
//                return view('livewire.admin-actions', ['id' => $id, 'nombre' => $nombre,'tabla'=>"HDV_Down"]);
//            })->label('HDV y descargas'),

            Column::callback(['id' ], function ($id ) {
                return view('livewire.admin-actions', ['id' => $id,'tabla'=>"programa_registrar"]);
            })->label('Mantenimientos'),


        ];
    }

}
