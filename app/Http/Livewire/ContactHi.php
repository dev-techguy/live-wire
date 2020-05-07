<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactHi extends Component
{
    public $contact;

    protected $listeners = ['refreshChildren' => 'refreshMe'];

    public function refreshMe()
    {
        //
    }

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.contact-hi');
    }
}
