@extends('layout')
@section('content')
  <div class="container">
    <h1>Laravel CRUD: WITH BOOTSTRAP MODAL</h1>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
  New
</button>

 <table class="table" id="table-posts">           
        <thead class="thead-dark">          
        <tr align="center">
          <th>ID</th> 
            <th class="text-center">Title</th>
            <th class="text-center">Body</th>
            <th colspan="2">&nbsp; Accion</th>
        </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
     <tr>
        <TD>{{$post->id}}</TD>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>
       <!--   <button onclick=""> <a class="btn btn-success"  href="{{$post->id}} post-toggle="modal" post-target="#edit">Editar</a></button> -->
      <!--  <button type="button" class="btn btn-primary" post-bs-toggle="modal" post-bs-target="#edit" post-id="{{$post->id}}">
          Edit
       </button> -->

       <a href="#" class="show-modal btn btn-info btn-sm" post-id="{{$post->id}}" post-title="{{$post->title}}" post-body="{{$post->body}}">
         <i class="fa fa-eye">ver</i>
       </a>
         <a href="#" class="edit-modal btn btn-warning btn-sm" post-id="{{$post->id}}" post-title="{{$post->title}}" post-body="{{$post->body}}">
         <i class="glyphicon glyphicon-pencil"></i>
       </a>
         <a href="#" class="delete-modal btn btn-danger btn-sm" post-id="{{$post->id}}" post-title="{{$post->title}}" post-body="{{$post->body}}">
         <i class="glyphicon glyphicon-trash"></i>
       </a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>


<script type="text/javascript">
  


</script>





<!-- Start Modal -- New-->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="" >
          {{ csrf_field() }}
        <input type="text" name="title" placeholder="Title"  autocomplete autofocus>
        <textarea name="body">Body</textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--End Modal-->


<!--  @include('edit-post') -->


@endsection

