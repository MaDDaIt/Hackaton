<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected $fillable = [
        'canal', 'fecha_recepcion', 'anio_ingreso',
        'entidad_sujeta_control', 'ambito_geografico',
        'provincia_id', 'distrito_id'
    ];

    
}
