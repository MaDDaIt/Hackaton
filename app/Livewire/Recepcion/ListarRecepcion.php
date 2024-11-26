<?php

namespace App\Livewire\Recepcion;

use Livewire\Component;
use App\Models\Recepcion;

class ListarRecepcion extends Component
{

    public $recepciones;

    protected $listeners = [
        'guardado' => 'getRecepciones',
        'recepcionEliminada' => 'getRecepciones',
    ];

    public function mount()
    {
        $this->getRecepciones();
    }

    public function getRecepciones()
    {
        $this->recepciones = Recepcion::with('denuncias')->get(); 
    }


    public function eliminar($id)
    {
        Recepcion::find($id)->delete();
        $this->dispatch('recepcionEliminada');
    }

    public function editar($id)
    {
        $this->dispatch('editar', $id);
    }
    public function render()
    {
        return view('livewire.recepcion.listar-recepcion', [
            'recepciones' => $this->recepciones
        ]);
    }
}
