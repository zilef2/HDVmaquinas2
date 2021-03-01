<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class ReportePorHoja implements FromView, WithTitle,ShouldAutoSize,WithHeadings
{
    /**
     * @return Collection
     */
    private $year;
    private $nombre_tabla;
    private $tablaa;

    public function __construct(String $nombre_tabla){$this->nombre_tabla  = $nombre_tabla;}

    public function query(){return "";}

    /**
     * @return string
     */
    public function title(): string{return $this->nombre_tabla;}

    public function headings(): array{
        return [
            'Id',
            'creado en',
        ];
    }

    public function view(): View
    {
        $this->tablaa=DB::table($this->nombre_tabla)->get();
        $modelo_vista = view('EXCELyPDF.export_toda', ['tablaa' => $this->tablaa,'nombre_t'=>$this->nombre_tabla]);

        return $modelo_vista;
    }
}
