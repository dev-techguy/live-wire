<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Sherman';
    public $loud = false;
    public $greeting = ['Hello'];

    public function resetName(string $name = 'Vincent')
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
