@extends('layout')
@section('content')
    
<div class="toll">
    <a href="{{ route('inicio')}}"><img src="{{asset('images/irAtras.jpg')}}"   width="100" height="80" align="right">
</a>

  <input type="text" class="search-input"  class="form-control" style=" width: 100%;" wire:model="searchPart"  placeholder="Buscar" >        
    <div>@livewire('count-comp')</div>
        
</div>     


@endsection
