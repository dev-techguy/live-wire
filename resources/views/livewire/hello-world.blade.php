<div>
    <input type="text" wire:model="name">

    <input type="checkbox" wire:model="loud">

    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    {{--    <button wire:mouseenter="resetName('Mercy')">Reset Name</button>--}}
    {{--    <button wire:keydown="resetName('Mercy')">Reset Name</button>--}}
    {{--    <button wire:click="resetName('Mercy')">Reset Name</button>--}}

{{--    <form action="#" wire:click.prevent="resetName('Mercy')" role="form">--}}
{{--        <button>Reset Name</button>--}}
{{--    </form>--}}

    <form action="#" wire:click.prevent="$set('name','Mercy')" role="form">
        <button>Reset Name</button>
    </form>

    <h2>{{ implode(',',$greeting)  }} {{ $name }} @if($loud) ! @endif</h2>
</div>
