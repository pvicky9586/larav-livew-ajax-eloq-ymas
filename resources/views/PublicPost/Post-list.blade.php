@extends('layout')
@section('content')

   @if (session('mensaje'))
	        <div class="alert alert-success">             
	            <small>{{ session('mensaje') }}  </small>
	        </div>
	    @endif


<div class="container">
   <h1>Post Publicados</h1>
		{{$prompt}}


	<div>
		<a href="{{ route('inicio')}}"><img src="{{asset('images/irAtras.jpg')}}"   width="60" height="80" align="right"></a>
	</div>

<!--Enlace Modal -->
<a href="{{ route('NewPost')}}" data-toggle="modal" data-target="#create" class="btn btn-primary" >Nuevo Post</a>




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>







	 <input type="text" class="search-input"  style=" width: 30%; margin-left: 70%;" wire:model="searchPart"  placeholder="Buscar Post" >           
	                    
	
	  
	        @foreach ($posts as $post)
	        
	        <h1 style="margin-left: 20%;">{{$post->title}}</h1>
	        <div style="display: flex; ">
	          	<div> 	        		
	            	{{$post->body}}
	        	</div>
	        	@if($post->file)
		        	<div>

		        		<img src="{{$post->file}}" width="500" height="300" align="right">
		        	</div>	
	        	@endif
	        </div>  
	        <br>  
	        @endforeach
	   
	    <div style="color:blue;">
	    	{{ $posts->links() }}
	    </div>
 




@include('PublicPost.create')

 </div>
   
@endsection