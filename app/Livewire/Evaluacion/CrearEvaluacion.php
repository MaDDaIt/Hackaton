<?php

namespace App\Livewire\Evaluacion;

use Livewire\Component;
use App\Models\Evaluacion;
use App\Models\Denuncia;

class CrearEvaluacion extends Component
{
    public $showModal = false;

    public $auditor_evaluacion;
    public $fecha_culminacion_evaluacion;
    public $resultado_evaluacion;
    public $denuncia_id;
    public $denuncias;

    protected $rules = [
        'auditor_evaluacion' => ['required', 'string', 'max:255'],
        'fecha_culminacion_evaluacion' => ['nullable', 'date'],
        'resultado_evaluacion' => ['nullable', 'string', 'max:255'],
        'denuncia_id' => ['required', 'exists:denuncias,id'],
    ];

    protected $messages = [
        'auditor_evaluacion.required' => 'El nombre del auditor es obligatorio.',
        'auditor_evaluacion.string' => 'El nombre del auditor debe ser un texto.',
        'auditor_evaluacion.max' => 'El nombre del auditor no debe superar los 255 caracteres.',
        'fecha_culminacion_evaluacion.date' => 'La fecha de culminación debe ser válida.',
        'resultado_evaluacion.string' => 'El resultado debe ser un texto.',
        'resultado_evaluacion.max' => 'El resultado no debe superar los 255 caracteres.',
        'denuncia_id.required' => 'Debe seleccionar una denuncia.',
        'denuncia_id.exists' => 'La denuncia seleccionada no es válida.',
    ];

    public function abrirModal()
    {
        $this->showModal = true;
    }

    public function cerrarModal()
    {
        $this->resetValidation();
        $this->reset();
        $this->showModal = false;
    }

    public function guardarEvaluacion()
    {
        $this->validate();

        // Crear la nueva evaluación
        $evaluacion = new Evaluacion();
        $evaluacion->auditor_evaluacion = $this->auditor_evaluacion;
        $evaluacion->fecha_culminacion_evaluacion = $this->fecha_culminacion_evaluacion;
        $evaluacion->resultado_evaluacion = $this->resultado_evaluacion;
        $evaluacion->denuncia_id = $this->denuncia_id;
        $evaluacion->save();
        $this->dispatch('guardado');

        session()->flash('success', 'La evaluación fue creada exitosamente.');
        $this->cerrarModal();
    }

    public function mount()
    {
        $this->denuncias = Denuncia::all();
    }

    public function render()
    {
        return view('livewire.evaluacion.crear-evaluacion');
    }
}
