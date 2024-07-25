<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public $numero = 40;

    public function aumentar(){
      $this->numero++;
    }

    public function reducir(){
     $this->numero--;
    }
    public function render()
    {
        return view('livewire.contador');
    }
}
