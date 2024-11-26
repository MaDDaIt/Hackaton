<?php
namespace App\Livewire\Evaluacion;

use Livewire\Component;
use App\Models\Evaluacion;

class ListarEvaluacion extends Component
{
    public $evaluaciones;

    protected $listeners = [
        'guardado' => 'cargarEvaluaciones',
        'evaluacionActualizada' => 'cargarEvaluaciones',
        'evaluacionEliminada' => 'cargarEvaluaciones'
    ];

    public function mount()
    {
        $this->cargarEvaluaciones();
    }

    public function cargarEvaluaciones()
    {
        // Cargar las evaluaciones activas (o según el criterio que necesites)
        $this->evaluaciones = Evaluacion::all();
    }

    public function eliminar($id)
    {
        // Eliminar la evaluación
        $evaluacion = Evaluacion::find($id);
        if ($evaluacion) {
            $evaluacion->delete();
            session()->flash('success', 'Evaluación eliminada con éxito.');
            $this->cargarEvaluaciones();
        }
    }

    public function render()
    {
        return view('livewire.evaluacion.listar-evaluacion', [
            'evaluaciones' => $this->evaluaciones
        ]);
    }
}
