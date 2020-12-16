@extends('layout')
@section('content')
    
<div class="toll">
  	<input type="text" class="search-input"  class="form-control" style=" width: 100%; background: blue;" wire:model="searchPart"  placeholder="Buscar" >        
    <div>@livewire('count-comp')</div>        
</div>     


@endsection
