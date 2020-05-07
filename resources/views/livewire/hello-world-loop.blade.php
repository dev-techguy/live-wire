<div>
    @foreach($names as $name)
{{--        @livewire('say-hi',['name'=> $name],key($name->id))--}}
        @livewire('say-hi',['name'=> $name])
    @endforeach
</div>
