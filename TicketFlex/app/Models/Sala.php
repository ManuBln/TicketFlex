<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    protected $table = 'salas'; //Nombre de la tabla en la base de datos

    protected $fillable = [ //Campos que se pueden modificar y/o insertar datos masivamente
        'nombre_sala',
        'aforo',
        'imagen',
        'lugar',
    ];


    // ------------------------------------------Relaciones------------------------------------------   
    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }
}
