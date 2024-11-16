<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    
    public $incrementing = false; // Para evitar que Laravel asuma que el ID es autoincremental
    protected $keyType = 'string'; // Define que el ID es una cadena

    protected $fillable = [
        'id',
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'direccion',
        'telefono',
    ];
}
