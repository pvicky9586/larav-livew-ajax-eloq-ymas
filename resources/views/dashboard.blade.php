@extends('layout')

<div class="container">
<a href="{{ route('boton')}}" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">
    Nueva tarea
</a>
	@include('create')
 </div>

 