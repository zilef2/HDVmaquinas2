<?php

namespace App\Http\Controllers;

use App\Exports\TBD;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function export2()
    {
        return (new TBD(2021))->download('BD_Equipos.xlsx');
    }

}
