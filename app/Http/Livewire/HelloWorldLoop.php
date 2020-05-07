<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorldLoop extends Component
{
    public $names = ['Vincent', 'Mercy', 'Sherman'];

    public function render()
    {
        return view('livewire.hello-world-loop');
    }
}
