<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $fillable = [
        'denuncia_id', 'auditor_evaluacion',
        'fecha_culminacion_evaluacion', 'resultado_evaluacion'
    ];
    
}
