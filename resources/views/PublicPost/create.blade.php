<div>
    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning" style="padding: 1%; font-weight: bold; margin-right: 20%;">
       <!--  <img src="{{asset('images/publicar.png')}}" width="100"> -->
    	Añadir Publicacion
    </button>
</div>


<!-- Modal -->


<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

            <div class="modal-header">
                <h5 class="display-3" id="exampleModalLabel">Añadir Publicacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn"><img src="https://lh3.googleusercontent.com/proxy/deq7G3vcAEDtiZd3fAy7oXlUWNBJexK4ZEQ63cmvKo5JPPksO0Uo9ut3rjyLU1343r3nM0ps0gZ8ilKbglu4VGkUsT1-L84sWyM5IQVNPed8InAn1b5V_CQ" width="50"></span>
                </button>
            </div>

    <div class="modal-body" style=" height: auto;
  width: 90%;
  overflow-y: auto;">
        <form enctype="multipart/form-data">


            <div class="form-group">
                <label style="font-size:2rem;">Categoria: </label>
                <select wire:model="category_id">
                   <option value="">Seleccione</option>
                  @foreach($categorys as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
            </div>
        
            <div  class="form-group">
                <label>Etiquetas: </label>
                    @foreach($tags as $index=>$tag)
                        <div >
                        <input type="checkbox" wire:model="tag_id"  id="tag" value="{{$tag->id}}" name="checkbox-test" class="form-checkbox">
                       <a href="#" class="tag-color" style="text-decoration: none;"> {{$tag->name}}</a>
                        </div>
                    @endforeach
            </div>
           

            <div class="form-group">
                <mark class="display-4 text-primary text-center">Title</mark>
                <input type="text" wire:model="title" name="title" class="form-control text-success" style="padding:3%; font-weight: bold; font-size: 2rem;">
                @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label class="text-secondary">Description</label>   
           
                    <textarea  wire:model="body"  class="ckeditor"  id="editor" rows="8" cols="80">
                     
                    </textarea>
               
                @error('body') <span class="text-danger error">{{ $message }}</span>@enderror           
            </div>


            <div class="form-group">
               <label>Imagen</label>
               <input type="file" wire:model="file"  accept="image/*">
                @error('file') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>
            <div>
               @if ($file)
                 <img src="{{ $file->temporaryUrl() }}">
               @endif
            </div>

                  
            <div class="form-group">
                <label>Publicar ¿?</label>
                    <input type="radio" wire:model="status" value="1">Si
                    <input type="radio" wire:model="status" value="0">No
            </div>
      </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal btn-lg">Save changes</button>
            </div>
               
    </div>

        

</div>
</div>
</div>
