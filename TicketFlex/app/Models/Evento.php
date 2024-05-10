<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos'; //Nombre de la tabla en la base de datos

    protected $fillable = [ //Campos que se pueden modificar y/o insertar datos masivamente
        'nombre_evento',
        'precio',
        'fecha_hora',
        'descripcion',
        'aforo',
        'aforo_disponible',
        'sala_id',
    ];

    // ------------------------------------------Relaciones------------------------------------------

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }

    public function entradas()
    {
        return $this->hasMany(Entrada::class);
    }
}
