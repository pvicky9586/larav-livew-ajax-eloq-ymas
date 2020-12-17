@extends('layout')

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
                <h3 class="">Title:</h3>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control" style="padding: 2%; font-size: 2rem; color: blue; font-weight: bold;" placeholder="title">
            </div>
         
            <div class="form-group">
                 <strong>Body:</strong>
                 <textarea class="form-control" style="height:50px" name="body" placeholder="body">{{ $post->body }}</textarea>
            </div>

            <div class="form-group" > 
                <strong>Publicado</strong>&nbsp;
                @if($post->status === 1)
                    Si<input type="radio" name="status" value="1" checked  class="form-control" >
                    &nbsp;&nbsp;&nbsp;
                    No<input type="radio" name="status" value="0">
                @else
                    Si<input type="radio" name="status" value="1">
                    &nbsp;&nbsp;&nbsp;
                    No<input type="radio" name="status" value="0" checked>
                @endif
            </div>

            <div align="center">
                <button type="submit" class="btn btn-success btn-lg ">
                Actualizar</button>
            </div>
        </div>

    </form>
@endsection
<!-- btn-block tamalo al 100% de ancho -->