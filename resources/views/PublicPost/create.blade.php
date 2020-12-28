<div>
    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-success" style="padding: 7%; font-size: 2rem; font-weight: bold; margin-left: 90%; loat: left;">
       <!--  <img src="{{asset('images/publicar.png')}}" width="100"> -->
    	Añadir Publicacion
    </button>
</div>


<!-- Modal -->


<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

            <div class="modal-header">
                <h5 class="display-3 text-primary" id="exampleModalLabel">Crear Publicacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe71zuOpu-Ukml7XcfmOMHQR7wroVgKjodDA&usqp=CAU" width="50"></span>
                </button>
            </div>

    <div class="modal-body" style="">
        <form enctype="multipart/form-data">

          <div class="form-group">
            @error('title') <span class="text-danger error">Titulo del Post</span>@enderror
                
             <input type="text" wire:model="title" name="title" placeholder="Titulo de la publicacion" class="form-control text-success  InputTitle">
           
            </div>

            <div class="form-group">
                @error('category_id') <span class="text-danger error">*</span>@enderror<label style="font-size:2rem;">Categoria: </label>
                <select wire:model="category_id">
                   <option value="">Seleccione</option>
                  @foreach($categorys as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>                 
            </div>
        
            <div  class="form-control">
                <label class="tag">Etiquetas:
                <div align="center" style="margin-left: 10%; width: 80%;">
                  @foreach($tags as $index=>$tag)                       
                    <input type="checkbox" wire:model="tag_id" class="tag" id="tag" value="{{$tag->id}}"> 
                    <label>{{$tag->name}}</label>&nbsp;&nbsp;
                  @endforeach
                  @error('tag_id') <span class="text-danger error">Indique almenos una etiqueta para el post</span>@enderror</label>
                </div>
            </div><br>


            <div class="form-group">
               <label>Imagen</label>
               <input type="file" wire:model="file"  accept="image/*">
                @error('file') <span class="text-danger error">Seleccione una imagen</span> @enderror
            </div>
            <div>
               @if ($file)
                 <img src="{{ $file->temporaryUrl() }}" style="max-width: 100%;">
               @endif
            </div>

                  
            <div class="form-group">
                  @error('status') <span class="text-danger error">*</span>@enderror <label>Publicar?</label>
                    <label style="color: blue;"><input type="radio" wire:model="status" value="1">Si</label>
                    <label style="color: red;"><input type="radio" wire:model="status" value="0">No</label>
                   
            </div>


            <div class="" align="center" style=";"> <!-- class="ckeditor"-->
                @error('body') <span class="text-danger error">*</span>@enderror
                <label class="text-secondary">Description</label>  <br>           
                    <textarea  wire:model="body" id="editor" rows="5" cols="50" ></textarea>               
                           
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
