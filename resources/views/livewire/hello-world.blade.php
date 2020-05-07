<div>
    <input type="text" wire:model="name">

    <input type="checkbox" wire:model="loud">

    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    <h2>{{ implode(',',$greeting)  }} {{ $name }} @if($loud) ! @endif</h2>
</div>
