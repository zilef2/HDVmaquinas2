<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha_programada',
        'tipo',
        'procedimiento',
        'insumos',
        'repuestos',
        'activo',

        ];


    public function Users(){return $this->belongstoMany(User::class,'users')->withTimestamps();}
    public function equipos(){return $this->belongstoMany(Equipo::class,'equipos')->withTimestamps();}
}
