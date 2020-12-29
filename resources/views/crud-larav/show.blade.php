@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $post->name }}</h2>
            </div>
            <div class="pull-right">
                <a  href="{{ route('posts.index') }}" title="Go back"> 
                <img src="https://www.vippng.com/png/detail/158-1586228_iconos-png-gratis-resume-volver-icono-descarga-gratuita.png" width="100"> </a>
            </div>
        </div>
    </div>

    <h1 align="center" class="display-2">{{ $post->title }}</h1>
    <div class="container">                     
            <div class="form-group">
                <strong >body: <small>{{ $post->body }}</small></strong>
            </div>
            <div class="form-group">
                <strong>Created in:</strong>
                {{ date_format($post->created_at, 'j M Y') }}
            </div>
            
            <div align="center">
              @if($post->factory == 1)       
                <img src="{{$post->file}}" width="150" height="190" alt="Imagen no disponible aun"> 
              @else             
                 <img src="{{ Storage::url("$post->file")}}" width="150" height="190">           
              @endif
            </div>
            <div class="form-group">
                 @if ($post->status === 1)
                    <strong class="text-success display-3"> Publicado</strong>
                @else
                    <strong class="text-danger display-6">Post No publicado</strong>
                @endif
            </div>
        
    </div>
@endsection
