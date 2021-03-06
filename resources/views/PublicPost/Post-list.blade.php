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
	@forelse ($posts as $index=>$post)
	<!-- border-top: 2px solid #aea6a4; -->
			<div class="flex" style="border-style: inset; border-color:  #aea6a4; border-left: 0; border-radius: 2%; border-right: 0;">
				<div>
			   	  @if($post->factory == 1)
			        <img src="{{$post->file}}" width="150" style="height: 100%;"> 
			      @else	  	    	
			    	<img src="{{ Storage::url("$post->file")}}" width="150" style="height: 100%;">      
		          @endif
		        </div>
		      
		        <div class="" style="display: block; padding-left: 2%; text-align-last: center; margin-top: 2; ">
		        	
		        	<div>
		        		<h1  class="display-6 text-success text-uppercase text-center">{{$post->title}}</h1>
		        	</div>
		        	
		        	<div class="text-muted" style="padding: 4%;">	
					       	  <?php $tam = strlen($post->body); 
								if ($tam <= 200){
									echo $post->body;
								}else{ 
									echo substr($post->body, 0, 200);
									echo '<b>...</b>';
								}	        		
					          ?>
					</div>

					<div align="center">	<!-- class="toast hide" -->					
			     	    <small style="" class="text-primary h4 ">
			        		@if($post->created_at)
			        			publicado: {{ date_format($post->created_at, 'j M Y') }}
			        		@endif
			            </small>
    		        </div>

			 	 	<?php $nro = Count($post->comments); ?>
				 	<div class="flex">
				 		<div>
				 			{{$nro}} <i><b>comentario(s)</b></i>
				 		</div>
						<div style="margin-left: 30%;">   				    									       
							<a href="{{route('comments', $post->id) }}" class="btn btn-primary btn-lg" >Comentar Post</a>
						</div>
				 	</div>	
			     </div>

			</div> 
			<br>
	@empty
	     <h1 class="text-danger text-center">No hay resultados</h1>  
	@endforelse
	
    <div class="d-flex justify-content-center">
        {!! $posts->links() !!}
    </div>




	   

	
	     
