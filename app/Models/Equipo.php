<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'serial',
        'aquien_vendio',
        'foto_plaqueta',
        'al_dia',
        'fecha_ultimo_mant',
    ];

    public function Users(){return $this->belongstoMany(User::class,'users')->withTimestamps();}
    public function mantenimientos(){return $this->belongstoMany(Mantenimiento::class,'mantenimientos')->withTimestamps();}

    public function getfoto(){return Storage::url($this->foto_plaqueta);}

}
