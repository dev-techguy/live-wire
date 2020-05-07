<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorldTwo extends Component
{
    public $name = 'Vincent';

//    public function mount(Request $request, $name)
//    {
//        $this->name = $request->input('name', $name);
//    }

    public function mount($name)
    {
        $this->name = $name;
    }

    public function hydrated()
    {
        $this->name = 'hydrated';
    }

    public function updating()
    {
        $this->name = 'updating';
    }

    public function updated()
    {
        $this->name = 'updated';
    }

    public function updateName()
    {
        $this->name = 'Name';
    }

    public function render()
    {
        return view('livewire.hello-world-two');
    }
}
