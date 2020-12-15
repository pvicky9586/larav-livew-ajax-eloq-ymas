
<!-- Start Modal -- Edit-->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
      </div>
      <div class="modal-body">
    
      <form method="POST" action="">
        @method('PUT')
        @csrf
        <input type="text" name="title" placeholder="Title" value="" autocomplete autofocus>
          <textarea name="body">Body</textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>

      </form>

    </div>
  </div>
</div>

<!--End Modal-->