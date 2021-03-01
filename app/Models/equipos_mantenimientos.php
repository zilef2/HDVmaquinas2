<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos_mantenimientos extends Model
{
    use HasFactory;

    protected $fillable =[
        'fecha',
        'equipo_id',
        'mantenimiento_id',
    ];
}
