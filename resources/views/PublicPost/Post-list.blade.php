
<div style="color: blue; margin-top: 10%; margin:2%;"  align="center">   <h1 class="display-2">Publicaciones</h1></div>
	@if (session('mensaje'))
	        <div class="alert alert-success">             
	            <small>{{ session('mensaje') }}  </small>
	        </div>
	    @endif
<div class="container">
	<div class="container">	
		 <input type="text" class="search-input"   wire:model="searchPart"  placeholder="Buscar Publicación" class="search">
		 <img src="{{asset('images/search.jpeg')}}" >
	</div>  
	<div style="margin:1%; " align="right">@include('PublicPost.create')</div>
	<div  class="public-Ah"style=""> Ahora disponibles
	</div>

<div>

	@foreach ($posts as $post)
	   <div style="display: flex; margin-top: 1%;" class="pull-left">

	   		<div>
	        	<img src="{{$post->file}}" width="150" height="190">  
	        </div>
	      	<div style="padding-left: 1%;">
	      		
	      		<h1 align="center" class="display-2" style="font-family: all; color: blue;">{{$post->title}}</h1>	        		
	        	<p class="text-muted">	
	        		<?php $tam = strlen($post->body); 
	        		echo substr($post->body, 0, 220);
	        		echo '<b>...</b>';
	        	?></p>
	        	<p class="" align="center" style="color:blue;">{{ date_format($post->created_at, 'j M Y') }}</p>

	        	<hr style="color:  	#c0c0c0; background-color: gray; width:85%;" />       

	       </div>
	   </div> 

	       
	        
	@endforeach
 
 </div>

</div>

<div>{{ $posts->links() }}</div>
	   

  	
