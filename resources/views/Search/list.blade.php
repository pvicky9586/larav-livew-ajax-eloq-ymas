    <table class="table">           
	        <thead class="thead-dark">          
	        <tr align="center"> 
	            <th>Title</th>
	            <th>Body</th>
	        </tr>
	    </thead>
	    <tbody>
	  
	        @foreach ($posts as $post)
	            <tr style="font-size: 2rem;">
	                <td align="center" class="td-tit">{{ $post->title }}</td>
	                <td class="td-desc">{{ $post->body }}</td>	                
	            </tr>
	        @endforeach
	    </tbody>
	</table>

<div style="color:blue;">
   {{ $posts->links() }} 
</div>