
<h1 style="color: blue; margin-top: 10%; margin:2%;"  align="center" class="display-2">Publicaciones</h1>

	@if (session('mensaje'))
	        <div class="alert alert-success">             
	            <small>{{ session('mensaje') }}  </small>
	        </div>
	    @endif
<div class="container">
	<div>	
		 <input type="text" class="search-input"   wire:model="searchPart"  placeholder="Buscar Publicación" class="search">
		 <img src="{{asset('images/search.jpeg')}}" >
	</div>  
	<div style="margin:1%; " align="right">
		@include('PublicPost.create')
	</div>
	<div  class="public-Ah"style=""> 
		Ahora disponibles 
	</div>

	@foreach ($posts as $post)
	<div style="display: flex; margin-top: 1%;" class="">
		<div>
	   	  @if($post->factory == 1)
	        <img src="{{$post->file}}" width="150" height="190">  
	      @else	  	    	
	    	<img src="{{ Storage::url("$post->file")}}"> 	        
          @endif
        </div>
        <div style="display: block; padding-left: 2%;">
        	<div align="center">
        		 <h1 class="display-4 text-success text-uppercase">{{$post->title}}</h1>
        	</div>
        	<div class="text-muted" style="padding-right: 4%; text-align: center;">	
	       	  <?php $tam = strlen($post->body); 
				if ($tam <= 200){
					echo $post->body;
				}else{ 
					echo substr($post->body, 0, 200);
					echo '<b>...</b>';
				}	        		
	          ?>
	     	  <br> 
	     	  	
	     	  <hr style="font-size: 1rem;" class="text-secondary">
	        	<small style="position: absolute;">publicado: {{ date_format($post->created_at, 'j M Y') }}
	          </small>
	        </div>
	      	
        </div>
    
	     
	      		
	      
	</div>

	<hr style="color:#c0c0c0; background-color: gray; width:85%;"/>   
	        
	@endforeach
</div>

<!-- <div>{{ $posts->links() }}</div> -->
	   

	
	     
