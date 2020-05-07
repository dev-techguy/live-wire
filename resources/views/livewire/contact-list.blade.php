<div>
    @foreach($contacts as $contact)
       <div>
           @livewire('contact-hi',['contact'=> $contact],key($contact->id))
       </div>
        <button wire:click="removeItem('{{ $contact->id }}')">REMOVE ITEM</button>
    @endforeach

    <button wire:click="$refresh">Refresh</button>

    {{ now() }}
</div>
