@extends('layout')
@section('content')
     <a href="{{ route('inicio')}}"><img src="{{asset('images/irAtras.jpg')}}"   width="100" height="80" align="right"></a> 
<div class="container">         
    @livewire('search-comp')
</div>     


@endsection
