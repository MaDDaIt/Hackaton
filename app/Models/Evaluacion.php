<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evaluacion extends Model
{
    use HasFactory;

    protected $table = 'evaluaciones';

    protected $fillable = [
        'auditor_evaluacion',
        'fecha_culminacion_evaluacion',
        'resultado_evaluacion',
        'denuncia_id',
    ];
    
}
