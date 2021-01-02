@extends('layouts.layout')
@section('content')
    
<div class="">
	 <img src="{{asset('images/laravel-livewire.png')}}" width="500" height="100">
    <div>@livewire('crud-comp')</div>
        
</div>     


@endsection
