<div class="container">
	   
	      <input type="text"   style=" width: 50%;  float: right; padding: 1%; font-size: 1.5rem;  border:0; margin-left: 3%; background: #e6e6fa;" wire:model="searchPart"  placeholder="Buscar" >       
	    <table class="table">           
	        <thead class="thead-dark">          
	        <tr align="center"> 
	            <th>Title</th>
	            <th>Body</th>
	        </tr>
	    </thead>
	    <tbody>
	  
	        @foreach ($posts as $post)
	            <tr>
	                <td>{{ $post->title }}</td>
	                <td>{{ $post->body }}</td>	                
	            </tr>
	        @endforeach
	    </tbody>
	</table>
	    <div style="color:blue;">
	    {{ $posts->links() }} 
	    </div>

 </div>