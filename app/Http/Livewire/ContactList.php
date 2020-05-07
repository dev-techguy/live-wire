<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactList extends Component
{
    public $contacts;

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function refreshChildren()
    {
        $this->emit('refreshChildren');
    }

    public function removeItem(string $id)
    {
        Contact::query()->findOrFail($id)->delete();
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.contact-list');
    }
}
