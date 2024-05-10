<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $table = 'articulos';//Nombre de la tabla en la base de datos

    protected $fillable = [//Campos que se pueden modificar y/o insertar datos masivamente
        'nombre',
        'imagen_ruta',
        'descripcion',
        'precio',
        'unidades',
        'hora_entrada',
        'hora_salida',
    ];

    // ------------------------------------------Relaciones------------------------------------------

    
    public function compras()
    {
        return $this->belongsToMany(Compra::class, 'detalle_compras', 'articulo_id', 'compra_id')->withPivot('cantidad');
    }
}
