<?php

namespace App\Livewire\Documentos;

use Livewire\Component;
use App\Models\Denuncia;

class CrearDocumentos extends Component
{
    public $showModal = false;
    public $canal;
    public $fecha_recepcion;
    public $anio_ingreso;
    public $entidad_sujeta_control;
    public $ambito_geografico;
    public $provincia;
    public $distrito;
    public $estado = '1';
    public $denun_estado = 'En proceso';

    protected $rules = [
        'canal' => ['required', 'string', 'max:250'],
        'fecha_recepcion' => ['required', 'date'],
        'anio_ingreso' => ['required', 'integer', 'digits:4'], 
        'entidad_sujeta_control' => ['required', 'string', 'max:250'],
        'ambito_geografico' => ['required', 'string', 'max:250'],
        'provincia' => ['required', 'string', 'max:250'],
        'distrito' => ['required', 'string', 'max:250'],
    ];

    public function abrirModal()
    {
        $this->resetValidation();
        $this->reset();
        $this->showModal = true;
    }

    public function guardarDenuncia()
    {
        $this->validate();
        
        $denuncia = new Denuncia();
        $denuncia->canal = $this->canal;
        $denuncia->fecha_recepcion = $this->fecha_recepcion;
        $denuncia->anio_ingreso = $this->anio_ingreso;
        $denuncia->entidad_sujeta_control = $this->entidad_sujeta_control;
        $denuncia->ambito_geografico = $this->ambito_geografico;
        $denuncia->provincia = $this->provincia;
        $denuncia->distrito = $this->distrito;
        $denuncia->estado = $this->estado;
        $denuncia->denun_estado = $this->denun_estado;
        $denuncia->save();

        $this->dispatch('guardado');
        $this->cerrarModal();
    }

    public function cerrarModal()
    {
        $this->showModal = false;
    }

    public function mount()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.documentos.crear-documentos');
    }
}
