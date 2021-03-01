<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TBD implements  WithMultipleSheets
{
    use Exportable;

    /**
     * @var int
     */
    private $year;

    public function __construct(int $year)
    {
        $this->year = $year;
    }
//    public function query(){return User::query()->where('id', '>',0);}

    public function sheets(): array
    {
        $sheets = [];
        $nombres=[
            'equipos',
            'equipos_mantenimientos',
            'mantenimientos',
            'mantenimientos_users',
            'users',
            ];

        foreach ($nombres as $nom) {
            $sheets[] = new ReportePorHoja($nom);
        }

        return $sheets;
    }
}
