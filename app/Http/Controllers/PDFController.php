<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\equipos_mantenimientos;
use App\Models\Mantenimiento;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class PDFController extends Controller
{
    public function descargarequipo($id)
    {
        $equipoPdf=Equipo::find($id);

        $mantenimiento_del_equipo_ids=equipos_mantenimientos::where('equipo_id',$equipoPdf->id)
            ->get()
            ->pluck('mantenimiento_id')->toArray();
        $mantenimiento_del_equipo=Mantenimiento::wherein('id',$mantenimiento_del_equipo_ids)->get();
//        dd($mantenimiento_del_equipo);
//        $temas=json_decode($equipopdf->temas,true);

        $data = [
            'title' => 'Equipo '.$id,
            'date' => Carbon::now()->toDateString(),
            'mants' => $mantenimiento_del_equipo,
            'fecha_mant' => $mantenimiento_del_equipo[0]->fecha_programada,
        ];

        $pdf = PDF::loadView('EXCELyPDF/EquipoPDF', $data);
//        return view('EXCELyPDF.EquipoPDF',$data);
        return $pdf->download('Equipo'.$id.'__'.$data['fecha_mant'].'.pdf');
    }
}
