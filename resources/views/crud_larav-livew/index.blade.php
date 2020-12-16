@extends('layout')
@section('content')
    
<div class="toll">
    <a href="{{ route('inicio')}}"><img src="{{asset('images/irAtras.jpg')}}"   width="100" height="80" align="right">
</a>
    <div>@livewire('crud-comp')</div>
        
</div>     


@endsection
