@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><br>
                <h2> Nuevo Post</h2>
            </div>
                <div class="pull-right">
                    <a  href="{{ route('posts.index') }}" title="Go back"> 
                    <img src="{{asset('images/icobs/back.png')}}.png"> </a>
                </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger" style="margin-right: 20%;">
            <strong>Ups!</strong> Hubo algunos problemas con tu entrada...<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Body:</strong>
                    <textarea class="form-control" style="height:50px" name="body"
                        placeholder="body"></textarea>
                </div>
            </div>
            <div class="form-group"> 
                <strong>Publicado</strong>
                Si<input type="radio" name="status" value="1">&nbsp;
                No<input type="radio" name="status" value="0">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
