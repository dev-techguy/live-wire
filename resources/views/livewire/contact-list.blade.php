<div>
    @foreach($contacts as $contact)
       <div>
           @livewire('contact-hi',['contact'=> $contact],key($contact->id))
       </div>
        <button wire:click="removeItem('{{ $contact->id }}')">REMOVE ITEM</button>
    @endforeach

    {{ now() }}

    <div>
        <button wire:click="refreshChildren">Refresh Children</button>
    </div>
</div>
