<?php

namespace App\Livewire\Documentos;

use Livewire\Component;
use App\Models\Denuncia;

class ListarDocumentos extends Component
{
    public $denuncias;

    protected $listeners = [
        'guardado' => 'getDenuncias',
        'denunciaActualizada' => 'getDenuncias',
        'denunciaEliminada' => 'getDenuncias',
    ];

    public function mount()
    {
        $this->getDenuncias();
    }

    public function getDenuncias()
    {
        $this->denuncias = Denuncia::all(); 
    }

    public function eliminar($id)
    {

        Denuncia::find($id)->delete();
        
        $this->dispatch('denunciaEliminada');
    }

    public function editar($id)
    {
        $this->dispatch('editar', $id);
    }
    public function render()
    {
        return view('livewire.documentos.listar-documentos', [
            'denuncias' => $this->denuncias
        ]);
    }
}
