<div class="container" style="margin-top: 5%;"> 
	<h1 class="display-5" >User - Post - Comments</h1>
	<table class="table table-borde table-sm">
	    <thead class="thead-dark">
	        <tr>
	            <th>User</th>
	            <th class="text-center">Posts</th>
	            <th class="text-center">Total Comments de User</th>
	        </tr>
	    </thead>
	       <tbody>
	       	<?php $i=0; ?>
	        @foreach ($users as $user)
	            <tr @if($i % 2 == 0) class="td-i" @endif>
	            	<td class="td-tit">{{ $user->name }}</td>

	            	@if($user->posts_count > 0)
	            	<td class="text-center">{{ $user->posts_count }}</td>
	            	@else
	            	<td class="text-center">no post</td>
	                @endif

	                @if($user->comments_count > 0)
	                <td class="text-center">{{ $user->comments_count }}</td>
		            @else 
		             <td class="text-center">No comments</td>
		            @endif
	            </tr>
	            <?php $i++; ?>
	        @endforeach
	    </tbody>
	</table>
</div>





<div class="container" style="margin-top: 3%;"> 
	<h1 class="display-3 text-center" >Comentarios de posts</h1>
	<table class="table table-borde">
	    <thead class="thead-dark">
	        <tr>
	            <th class="text-center">Posts</th>
	            <th class="text-center">Nª Comments</th>
	        </tr>
	    </thead>
	    <?php $i=0; ?>
	    <tbody>
	    @foreach($posts as $post)
	    <tr @if($i % 2 == 0) class="td-i" @endif >	
	        <td class="text-center">{{$post->title}}</td> 
	         @if($post->comments_count > 0)
	            <td class="text-center">{{ $post->comments_count }}</td>
		     @else 
		        <td class="text-center">No comments</td>
		     @endif


	        <?php $i++; ?>
	    </tr>
		@endforeach
	    </tbody>
	</table>
</div>


<div class="" style="margin-top: 3%;"> 
	<h1 class="display-5" >Ver Comentarios</h1>

	  	@foreach($allposts as $post)	
		       		 	
		    @foreach($comments as $comment)	 
		       	@if ($post->id == $comment->post_id)
		       	<div class="border border-secondary">
			   		<h1 class="display-5 text-success text-center">{{$post->title}}</h1>	
			   		
			   		<p class="h5 text-danger">Comentarios mas recientes:</p>
			   		@foreach($comments as $comment)
		    			@if ($post->id == $comment->post_id)
		    				 <small class="h4 text-mute"> {{$comment->comment}}</span><br>
		    			@endif
					@endforeach
				</div>
				@break 2
				@endif	

				
	        @endforeach	           
		@endforeach
		

</div>
	
	    