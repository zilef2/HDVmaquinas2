<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class TablaMaquinaAlertas extends LivewireDatatable
{
    public $hideable = 'select';
    public $SE;
    public $hace_dias;

    protected $queryString = ['SE'];

    public function builder()
    {
//        $this->hace_dias="hola";
//
//        $empresa_id=intval(session('empresa_id'));
//
//        if ($empresa_id!=0) {
//
//            $proyectos_con_avance=estado_avance::all()->pluck('proyecto_id')->toArray();
//            return proyecto::query()
//                ->where('empresa_id',$this->SE)
//                ->whereIn('id',$proyectos_con_avance)
//                ;
//        }else{
            return User::query()->where('id','>',0);

//        }

    }

    public function columns()
    {
        return [
            Column::name('name')
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






//            DateColumn::name('fecha_inicio')
//                ->label('Fecha Inicio')
//                ->filterable(),
//
//            DateColumn::name('updated_at')
//                ->label('Ultima modificación')
//                ->format('d/m/y g:i a')
//                ->filterable(),
//
            Column::callback(['updated_at'], function ($updated_at) {
                return Carbon::createFromDate($updated_at)->diffForHumans(Carbon::now());
            })->label('Hace cuanto'),
//
//            BooleanColumn::name('finalizado')
//                ->label('finalizado')
//                ->filterable(),
//
            Column::callback(['id', 'name'], function ($id, $name) {

                return view('livewire.admin-actions', ['id' => $id, 'name' => $name,'tabla'=>"tabla_maquina_alertas"]);
            }),


        ];
    }

}
