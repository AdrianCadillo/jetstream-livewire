<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SumaNumeros extends Component
{
    // public $numero;public $usuario;
    // public $email,$nombres;

    /// String,Integer,float,Modelos

    // public function mount(User $user){
    //     $this->email = $user->email;
    //     $this->nombres = $user->name;
    // }

    #[Validate("required",message:"Complete el campo número 1...")]
    public $numero1;
    #[Validate("required",message:"Complete el campo número 2....")]
    public $numero2;

    public $respuesta;

    /**
     * Método sumar
     */
    public function sumar(){

       $this->validate();
      $this->respuesta = $this->numero1 + $this->numero2;
      $this->dispatch("suma","La suma es : ".$this->respuesta);
      $this->reset();
    }
    public function render()
    {
        return view('livewire.suma-numeros');
    }
}
