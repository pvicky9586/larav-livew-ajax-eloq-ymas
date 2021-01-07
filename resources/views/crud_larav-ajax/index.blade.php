@extends('layouts.app')
@section('content')

<div class="">
   <img src="{{asset('images/ajax.png')}}" width="400" height="100">        
</div>
<br><br><br>

  @if (session('mensaje'))
          <div class="alert alert-success">             
              <small>{{ session('mensaje') }}  </small>
          </div>
      @endif
<div class="row">
  <div class="table table-responsive">
    <table class="table table-bordered" id="table" style="font-size: 2rem;">
      <thead class="thead-dark">
      <tr>
      <!--   <th width="150px">ID</th> -->

        <th>Title</th>
        <th>Body</th>
        <th>Creado</th>
        <th class="text-center" width="250px"><!--CREAR -->
          <a href="#" class="create-modal btn btn-success btn-sm" >
            <i class="glyphicon glyphicon-plus"></i>
          </a>

         
        </th>
      </tr>
      </thead>
      {{ csrf_field() }}
      @foreach ($post as $value)
        <tr class="post{{$value->id}}">
         <!--  <td>{{ $value->id}}</td> -->
        <td class="h4 text-center">{{ $value->title }}</td>
        <td  class="text-muted h6" style="padding-right: 4%; text-align: center;"> 
          <?php $tam = strlen($value->body); 
            if ($tam <= 80){
                echo $value->body;
            }else{ 
                echo substr($value->body, 0, 100);
                echo '<b>...</b>';
            }                   
          ?>
        </td>
       <!--    <td> {{ $value->created_at}}> </td> -->
        <td class="actions-td h5">
            @if ($value->created_at)
                {{ date_format($value->created_at, 'j M Y') }}
            @endif
        </td>

          <td align="center">
            <!-- SHOW -->
            <a href="#" class="show-modal btn  btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
              <img src="{{asset('images/icons/show.png')}}" width="35" height="20">
            </a>

            <!-- EDIT -->
            <a href="#" class="edit-modal btn btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
              <img src="{{asset('images/icons/edit.png')}}" width="30" height="25">
            </a>

            <!-- DELETE -->
            <a href="#" class="delete-modal btn btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
              <img src="{{asset('images/icons/delet.png')}}" width="30" height="22">
            </a>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
<div c>
   {!! $post->links() !!}
</div>
       


<!--MODALAS-->




{{-- Modal Form Create Post --}}
<div id="create" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <img src="{{asset('images/icons/close.png')}}" width="50"><!-- &times; -->
        </button>
        <h4 class="modal-title"></h4>
      </div>

      <div class="modal-body">
        <form class="form-horizontal" role="form" action="{{ route('post.store')}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row add">
            <label class="control-label col-sm-2" for="title">Title :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" name="title"
              placeholder="Your Title Here" required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="body">Body :</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" id="body" name="body" placeholder="Your Body Here" required></textarea>            
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="submit" id="add">
              <span class="glyphicon glyphicon-plus"></span>Save Post
            </button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">
              <span class="glyphicon glyphicon"></span>close
            </button>
          </div>
        </form>
      </div>
        
    </div>
  </div>
</div>




{{-- Modal Form Show POST --}}
<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
          <img src="{{asset('images/icons/close.png')}}" width="50"><!-- &times; -->
        </button>
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
  </div>
</div>




{{-- Modal Form Edit and Delete Post --}}
<div id="myModal"class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">
          <img src="{{asset('images/icons/close.png')}}" width="50"><!-- &times; -->
        </button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="modal">
          <div class="form-group">
            <label class="control-label col-sm-2"for="id">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fid" disabled> <!--  de solo lectura -->
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2"for="title">Title</label>
            <div class="col-sm-10">
            <input type="name" class="form-control" id="t">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2"for="body">Body</label>
            <div class="col-sm-10">
            <textarea type="name" class="form-control" id="b"></textarea>
            </div>
          </div>
        </form>


		{{-- Form Delete Post --}}
        <div class="deleteContent">
          Are You sure want to delete <span class="title"></span>?
          <span class="hidden id"></span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn actionBtn" data-dismiss="modal">
          <span id="footer_action_button" class="glyphicon"></span>
        </button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">
          <span class="glyphicon glyphicon"></span>close
        </button>
      </div>
    </div>
  </div>
</div>

@endsection
