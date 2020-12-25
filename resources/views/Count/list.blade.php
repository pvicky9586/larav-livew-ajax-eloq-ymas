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
	                <td class="text-center">{{ $user->posts_count }}</td>
	                <!-- comentarios de cada post -->
	                <td class="text-center">{{ $user->comments_count }}</td>
	            </tr>
	            <?php $i++; ?>
	        @endforeach
	    </tbody>
	</table>
</div>



<div class="container" style="margin-top: 3%;"> 
	<h1 class="display-5" >Nª Comentarios de post</h1>
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
	    	@foreach($comments as $comment)	
	    		@if ($post->id == $comment->post_id)	     				  
					<td class="text-center"> {{ $post->comments_count }} </td>
				@break
				@else
					<td class="text-center"> {{ $post->comments_count }} </td>
				@break
				@endif
            @endforeach
	        <?php $i++; ?>
	    </tr>
		@endforeach
	    </tbody>
	</table>
</div>


<div class="container" style="margin-top: 3%;"> 
	<h1 class="display-5" >Ver Comentarios de post</h1>

	  	@foreach($allposts as $post)	
		       		 	
		    @foreach($comments as $comment)	 
		       	@if ($post->id == $comment->post_id)
		       	<div style="margin-top: 1%; border: solid 1px; border-color: red;">
			   		<h1 class="display-1">{{$post->title}}</h1>	
			   		@foreach($comments as $comment)
		    			@if ($post->id == $comment->post_id)
		    				 <small class=""> {{$comment->comment}}</span><br>
		    			@endif
					@endforeach
				</div>
				@break 2
				@endif	

				
	        @endforeach
		    		           
		@endforeach
		

</div>
	
	    