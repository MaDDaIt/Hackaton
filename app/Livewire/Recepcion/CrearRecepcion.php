<?php

namespace App\Livewire\Recepcion;

use Livewire\Component;
use App\Models\Denuncia; 
use App\Models\Recepcion;

class CrearRecepcion extends Component
{
    public $showModal = false;
    public $denuncia_id;  // Agregar esta propiedad
    public $denuncias = [];
    public $fecha_registro_recepcion;
    public $auditor_recepcion;
    public $fecha_evaluacion_admision;
    public $resultado_recepcion;

    protected $rules = [
        'denuncia_id' => ['required', 'exists:denuncias,id'],
        'fecha_registro_recepcion' => ['required', 'date'],
        'auditor_recepcion' => ['required', 'string', 'max:250'],
        'fecha_evaluacion_admision' => ['nullable', 'date'],
        'resultado_recepcion' => ['nullable', 'string', 'max:250'],
    ];

    public function mount()
    {
        $this->denuncias = Denuncia::all();
    }

    public function abrirModal()
    {
        $this->resetValidation();
        $this->reset();
        $this->showModal = true;
    }

    public function guardarRecepcion()
    {
        $this->validate();

        $recepcion = new Recepcion();
        $recepcion->denuncia_id = $this->denuncia_id;
        $recepcion->fecha_registro_recepcion = $this->fecha_registro_recepcion;
        $recepcion->auditor_recepcion = $this->auditor_recepcion;
        $recepcion->fecha_evaluacion_admision = $this->fecha_evaluacion_admision;
        $recepcion->resultado_recepcion = $this->resultado_recepcion;
        $recepcion->save();

        $this->dispatch('guardado');
        $this->cerrarModal();
    }

    public function cerrarModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.recepcion.crear-recepcion');
    }
}
