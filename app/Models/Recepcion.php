<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recepcion extends Model
{
    protected $table = 'recepciones';
    protected $fillable = [
        'denuncia_id', 'fecha_registro_recepcion',
        'auditor_recepcion', 'fecha_evaluacion_admision',
        'resultado_recepcion'
    ];
    public function denuncias() {
        return $this->hasMany(Denuncia::class);
    }
    
    
}
