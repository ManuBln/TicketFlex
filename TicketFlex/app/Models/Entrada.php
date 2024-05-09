<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    protected $table = 'entradas'; //Nombre de la tabla en la base de datos

    protected $fillable = [ //Campos que se pueden modificar y/o insertar datos masivamente
        'evento_id',
        'usuario_id',
        'cantidad',
        'total',
    ];

    public function evento() //Relación uno a muchos
    {
        return $this->belongsTo(Evento::class);
    }
}
