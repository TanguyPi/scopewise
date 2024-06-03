<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Counter')]
class Counter extends Component
{

    public $todo = '';

    // Props
   public $todos = ['banane','orange'];

   public function add(){
        $this->todos[] = $this->todo;

        $this->reset('todo');
   }
   
   // Initialise le composant
   public function mounted(){
       dd('aahahahha');
   }

    public function render()
    {
        return view('livewire.counter');
    }
}
