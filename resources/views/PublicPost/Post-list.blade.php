<h1 style="color: blue; margin-top: 10%; margin:2%;"  align="center" class="display-2">Publicaciones</h1>

	@if (session('mensaje'))
	        <div class="alert alert-success">             
	            <small>{{ session('mensaje') }}  </small>
	        </div>
	    @endif


	<div style="">
		<div align="left" style="margin: 0;">	
			 <input type="text" class="search-input"   wire:model="search"  placeholder="Buscar Publicación" class="search">
			 <img src="{{asset('images/search.jpeg')}}" width="150" >
		</div>

		<div align="right">
			<!-- button y modal -->
			@include('PublicPost.create')
		</div>		
	</div>

	<div  align="left" style="background:  #4c0780; color:#fff; padding: 0.5%; font-size: 2rem;"> Ahora disponibles</div>
	<br>

	@forelse ($posts as $post)
	
			<div style="display: flex; margin-top: 1%;" class="">
				<div>
			   	  @if($post->factory == 1)
			        <img src="{{$post->file}}" width="150" height="190" alt="Imagen no disponible aun"> 
			      @else	  	    	
			    	<img src="{{ Storage::url("$post->file")}}" width="150" height="190"> 	        
		          @endif
		        </div>
		       
		        <div style="display: block; padding-left: 2%;" >
		        	<div>
		        		 <h1 align="center" class="display-6 text-success text-uppercase">
		        		 	{{$post->title}}
		        		 </h1>
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
					</div>
			     	<div>
			     	    <details>
							<summary style="font-weight: bold; color: red;"><b class="text-danger h4"><i>comentarios</i></b></summary>
							<?php $var = Count($post->comments); ?>
							@if ($var>0)
								<!-- <h1> {{ $post->comments }}</h1>	 -->				 
							   	@foreach($comments as $comment)
						    	    @if($post->id == $comment->post_id)
						    		  <small class=""> {{$comment->comment}}</small><br>
					    			@endif
								@endforeach
							@else
								<small>no comment</small>
    						@endif									
						</details>	
					</div>
			     	<div>
			     	    <small style="position: absolute;" class="text-primary">
			        		@if($post->created_at)
			        			publicado: {{ date_format($post->created_at, 'j M Y') }}
			        		@endif
			            </small>
    		         </div>
			      	
		        </div>
					      
			</div><br>   
	@empty
	     <h1 class="text-danger text-center">No hay resultados</h1>  
	@endforelse
	
    <div class="d-flex justify-content-center">
        {!! $posts->links() !!}
    </div>





	   

	
	     
