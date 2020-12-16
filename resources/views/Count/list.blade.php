	
	<table class="table table-borde table-sm">
	    <thead class="thead-dark">
	        <tr>
	            <th>User</th>
	            <th class="text-center">Posts</th>
	            <th class="text-center">Comments</th>
	        </tr>
	    </thead>
	       <tbody>
	       	<?php $i=0; ?>
	        @foreach ($users as $user)
	            <tr @if($i % 2 == 0) class="td-i" @endif>
	                <td class="td-tit">{{ $user->name }}</td>
	                <td class="text-center">{{ $user->posts_count }}</td>
	                <td class="text-center">{{ $user->comments_count }}</td>
	            </tr>
	            <?php $i++; ?>
	        @endforeach
	    </tbody>
	</table>
	

