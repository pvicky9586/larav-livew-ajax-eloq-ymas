@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Actualizar Post</h2>
            </div>
            <div class="pull-right">
                <a  href="{{ route('posts.index') }}" title="Go back"> 
                <img src="https://www.vippng.com/png/detail/158-1586228_iconos-png-gratis-resume-volver-icono-descarga-gratuita.png" width="100"> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Hubo algunos problemas con tu entrada..<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="container">
            <div class="form-group">
                <h3 class="display-3">Title:</h3>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control" style="padding: 2%; font-size: 2rem; color: blue; font-weight: bold;" placeholder="title">
            </div>
         
            <div class="form-group">
                 <strong>Body:</strong><br>
                 <textarea rows="5" style="font-size:2rem; width: 80%;" name="body" placeholder="body">{{ $post->body }}</textarea>
            </div>
            <div align="center">
            @if($post->file)
               
              @if($post->factory == 1)       
                <img src="{{$post->file}}" width="150" height="190" alt="Imagen no disponible aun"> 
              @else             
                 <img src="{{ Storage::url("$post->file")}}" width="150" height="190">           
              @endif
             @endif
              </div>

            <div class="form-group" > 
                @if($post->status === 1)
                    <label class="text-success">Published </label>
                    &nbsp;&nbsp;&nbsp;
                    stop posting<input type="radio" name="status" value="0">
                @else
                <label class="text-danger">No published</label>
                     &nbsp;&nbsp;&nbsp;
                    Publicar ahora<input type="radio" name="status" value="1">
                    
                @endif
            </div>

            <div align="center">
                <button type="submit" class="btn btn-success btn-lg btn-block">
                Update</button>
            </div>
        </div>

    </form>
@endsection
<!-- btn-block tamalo al 100% de ancho -->