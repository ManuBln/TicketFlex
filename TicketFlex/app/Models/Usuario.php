<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios'; //Nombre de la tabla en la base de datos

    protected $fillable = [ //Campos que se pueden modificar y/o insertar datos masivamente
        'nombre',
        'correo',
        'password',
        'direccion',
        'telefono',
        'tipo_usuario',
    ];

    protected $hidden = [ //Campos que no se deben mostrar
        'password',
        'remember_token',
    ];


    // public function setPasswordAttribute($password){//Función para encriptar la contraseña
    // $this->attributes['password'] = bcrypt($password);
    // }

    // ------------------------------------------Relaciones------------------------------------------    

    public function compras()
    {
        return $this->hasMany(Compra::class);
    }

    public function entradas()
    {
        return $this->hasMany(Entrada::class);
    }
}
