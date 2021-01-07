@extends('layouts.layout')
@section('content')
 <div class="pull-right">
    <a  href="{{ route('Public') }}" title="Go back"> 
    <img src="{{asset('images/icons/back.png')}}" width="80"> </a>
</div>


    <div class="container">

        <h1 class="display-3 text-center text-blue top">{{$post->title}}</h1>
        <label class="h5 text-center">{{$post->body}}</label>
        
<!-- {{$commentsPost}} -->

<?php $Nro = Count($commentsPost->comments); ?>
    @if ($Nro>0)
        <label> <i><b>{{$Nro}} comentarios</b></i></label><br>
        @foreach($comments as $comm)
            @if($post->id == $comm->post_id)
                
                    <div class="form--group">
                        <label class="text-bold"><img src="{{asset('images/icons/comment.png')}}" width="70">
                            <i class="h4">{{$comm->name}}</i>
                            <p><i class="h5"> {{$comm->comment}}</i></p>
                        </label>
                        <label class="text-center">.De fecha :<b class="text-bold text-primary"> 
                            @if($comm->created_at)
                                {{ date_format($comm->created_at, 'j M Y') }}
                            @endif</b> 
                        </label>
                       <!--  <a href="">Responder</a> -->
                    </div>
            @endif                  
        @endforeach
            
            <?php echo $comment=''; ?> 
    @else
        <small class="text-bold">Sin comentarios</small>
    @endif  

        

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <label class="text-bold top text-viol h4 form-control" style="background: #cfebae">Comentar</label> 
        <div class="form-group" style="background:  #f0dbc5 "> <!-- class="ckeditor"-->
           <small class="text-bold h4" >
            <b>Nombre</b> <input type="text" name="name" style="width: 40%; margin-right: 8%;">
            <b>Email</b> <input type="text" name="email" style="width: 30%;">
           </small>  
             </div>
              @error('name') <span class="text-danger error">Nombre</span>@enderror
              @error('email') <span class="text-danger error">Email</span>@enderror
                    <!-- class="ckeditor" -->
            <textarea  name="comment" id="comment" rows="10"  align="center" class="form-control" placeholder="Añadir Commentario"></textarea>    
            @error('comment') <span class="text-danger error">Añada un comentario</span>@enderror           
     
           <input type="text" name="post_id" value="{{$post->id}}" class="toast hide" >
       <div>
            <button type="submit" class="btn btn-primary  btn-lg">Añadir</button>
             <button type="reset" class="btn btn-warning">Limpiar</button>
        </div>
    </form>
@endsection