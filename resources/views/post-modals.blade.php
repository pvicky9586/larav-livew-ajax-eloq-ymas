@extends('layout')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Simple Laravel CRUD Ajax</h1>
  </div>
</div>

<div class="row">
  <div class="table table-responsive">
    <table class="table table-bordered" id="table">
      <tr>
        <th width="150px">ID</th>
        <th>Title</th>
        <th>Body</th>
        <th>Imag</th>
        <th class="text-center" width="150px">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
             New
            </button>
        </th>
      </tr>
      {{ csrf_field() }}
      @foreach ($post as $value)
        <tr class="post{{$value->id}}">
          <td>{{ $value->id}}</td>
          <td>{{ $value->title }}</td>
          <td>{{ $value->body }}</td>
          <td>{{ $value->file}}</td>
          <td>
        
           <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
              <i class="fa fa-eye"></i>
         
            <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
              <i class="glyphicon glyphicon-pencil"></i>
            </a>
            <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
              <i class="glyphicon glyphicon-trash"></i>
            </a>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
  {{$post->links()}}
</div>

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




{{-- Modal Form Show POST --}}
<div id="show" class="show-modal modal fade"  id="show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalshow"></h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
                  </div>
                    <div class="modal-body">
                    <div class="form-group">
                      <label for="">ID :</label>
                      <b id="i"/>
                    </div>
                    <div class="form-group">
                      <label for="">Title :</label>
                      <b id="ti"/>
                    </div>
                    <div class="form-group">
                      <label for="">Body :</label>
                      <b id="by"/>
                    </div>
                    </div>
                    </div>


{{-- Modal Form Show POST --}}
<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
                  </div>
                    <div class="modal-body">
                    <div class="form-group">
                      <label for="">ID :</label>
                      <b id="i"/>
                    </div>
                    <div class="form-group">
                      <label for="">Title :</label>
                      <b id="ti"/>
                    </div>
                    <div class="form-group">
                      <label for="">Body :</label>
                      <b id="by"/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>

    </div>
  </div>
</div>





                  
               


<script type="text/javascript">
  
  // Show function
  $(document).on('click', '.show-modal', function() {
  $('#show').modal('show');
  $('#i').text($(this).data('id'));
  $('#ti').text($(this).data('title'));
  $('#by').text($(this).data('body'));
  $('.modal-title').text('Show Post');
  });

</script>




@endsection
