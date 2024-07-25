<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Crud extends Component
{
    #[Validate("required")]
    public $curso;
    public $Indice;
    public $textButton ='Registrar';
    public $action = 'save';

    public $listaCursos = [
        "PHP Y MYSQL MVC",
        "PHP CON LARAVEL",
        "FACTURACION ELECTRÓNICA"
    ];

    /**
     * Método para registrar nuevo curso
     */
    public function addCurso(){

        $this->validate();

        if(!in_array($this->curso,$this->listaCursos))
        {
            if($this->action === 'save'){
                array_push($this->listaCursos,$this->curso);
            }else{
                $this->listaCursos[$this->Indice] = $this->curso;
                $this->textButton = "Registrar";
                $this->action = 'save';
            }
        }else{
            $this->dispatch("existe","El curso de ".$this->curso." ya existe");
        }

        $this->curso = "";
        
    }

    /**
     * Método para eliminar un curso
     */
    public function confirmarEliminado($id,$cursoValue){
        $this->Indice = $id;

        $this->dispatch("confirmar","Estas seguro de eliminar el curso ".$cursoValue." ? ");
    }

    /**
     * para eliminar
     */
    #[On("delete")]
    public function Eliminar(){

        unset($this->listaCursos[$this->Indice]);
        $this->dispatch("ok-eliminado");
    }

    /**
     * Método editar
     */
    public function editar($indice,$valorCurso){
        $this->textButton = "Guardar cambios";
        $this->action = 'editar';
        $this->curso = $valorCurso;
        $this->Indice = $indice;
    }

    public function render()
    {
        return view('livewire.crud');
    }
}
