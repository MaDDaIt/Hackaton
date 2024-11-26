<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recepcion extends Model
{
    protected $fillable = [
        'denuncia_id', 'fecha_registro_recepcion',
        'auditor_recepcion', 'fecha_evaluacion_admision',
        'resultado_recepcion'
    ];
    
}
