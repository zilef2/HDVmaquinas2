<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mantenimientos_user extends Model
{
    use HasFactory;

    protected $fillable =[
        'equipo_id',
        'mantenimiento_id',
    ];


}
