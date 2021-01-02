@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-12">
    <h1 style="margin-top: 10%;" class="display-4 text-center">CRUD  con Ajax</h1>
  </div>
</div>

<div class="row">
  <div class="table table-responsive">
    <table class="table table-bordered" id="table" style="font-size: 2rem;">
      <thead class="thead-dark">
      <tr class="h4 text-center">
       <!--  <th width="150px">ID</th> -->
        <th>Title</th>
        <th>Body</th>
        <th width="120">Creado</th>
        <th class="text-center" width="200">
          <a href="#" class="create-modal">
            <img src="{{asset('images/icons/new.png')}}" width="30">
          </a>

         
        </th>
      </tr>
      </thead>
      {{ csrf_field() }}
      @forelse($post as $value)
        <tr class="post{{$value->id}}">
          <!-- <td class="h6">{{ $value->id}}</td> -->
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
          <td class="actions-td h5">
            @if ($value->created_at)
                {{ date_format($value->created_at, 'j M Y') }}
            @endif
        </td>
          <td class="text-center" width="200">
            <a href="#" class="show-modal" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
           <img src="{{asset('images/icons/show.png')}}" width="35" height="20">
            </a>&nbsp;

            <a href="#" class="edit-modal" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
               <img src="{{asset('images/icons/edit.png')}}" width="30" height="25">
            </a>&nbsp;

            <a href="#" class="delete-modal" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
              <img src="{{asset('images/icons/delet.png')}}" width="30" height="22">
            </a>
          </td>
          </tr>
         @empty
         <tr>
          <td></td>
            <td class="text-danger">No hay resultado</td>
        </tr>
               
        @endforelse
    </table>
  </div>
  {{$post->links()}}
</div>




<!--MODALS-->


<!-- Modal Form Create Post  -->
<div id="create" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-blue text-bold"></h4>
        <button type="button" class="close" data-dismiss="modal">
          <img src="{{asset('images/icons/close.png')}}" width="50"><!-- &times; -->
        </button>
      </div>

      <div class="modal-body">
        <form class="form-horizontal" role="form" action="{{ route('post.store')}}" method="POST">
        	{{ csrf_field() }}
         

          <div class="form-group row add">
            
            <div class="col-sm-10">
              <label class="control-label text-center text-bold h4" for="title">Title:</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Title the post" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="body">Description:</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" id="body" rows="5" name="body" placeholder="description the post" required></textarea>            
            </div>


          </div>
        </form>
      </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="submit" id="add">
                Save Post
            </button>
           <button type="button" class="btn btn-danger" data-dismiss="modal">
          <span class="glyphicon glyphicon"></span>close
        </button>
          </div>
    </div>
  </div>
</div></div>



{{-- Modal Form Show POST --}}
<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title text-blue text-bold"></h4>
          <button type="button" class="close" data-dismiss="modal">
            <img src="{{asset('images/icons/close.png')}}" width="50"><!-- &times; -->
          </button>
      </div>
            <div class="modal-body">
                <div class="form-group ">
                  <label for="" class="text-primary h3">Title:</label>
                   <b id="ti"/>
                </div>
                <div class="form-group">
                  <label for="" class="text-center text-primary ">Description: </label>
                  <b id="by"/>
                </div>
                <div class="form-group text-bold">
                  <label for="" class="text-center text-primary ">Id: </label>
                  <b id="i"/>
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
         <h4 class="modal-title text-blue"></h4>
          <button type="button" class="close" data-dismiss="modal">
            <img src="{{asset('images/icons/close.png')}}" width="50"><!-- &times; -->
          </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="modal">
          <!-- <div class="form-group">
            <label class="control-label col-sm-2"for="id">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fid" disabled>
            </div>
          </div> -->
          <div class="form-group">
            <label class="control-label text-primary h3"for="title">Title</label>
            <div class="col-sm-10">
            <input type="name" class="form-control" id="t">
            </div>
          </div>
          <div class="form-group">
            <label class="text-primary h5"for="body">Body</label>
            <div class="col-sm-10">
            <textarea type="name"  class="form-control" rows="5" id="b"></textarea>
            </div>
          </div>
        </form>


		{{-- Form Delete Post --}}
  <div class="deleteContent">
      ¿Estás seguro de que quieres eliminar?<br>
      <span class="title"></span>?
      <span class="hidden id"></span>
  </div>
  </div>
    <div class="modal-footer">
      <button type="button" class="btn actionBtn" data-dismiss="modal">
        <span id="footer_action_button" class="glyphicon"></span>
      </button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">
          close
      </button>
    </div>
  </div>
  </div>
</div>


@endsection

