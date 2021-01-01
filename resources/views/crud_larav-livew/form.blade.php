<div class="">    
  <div class="">
    <label>Title</label>
    <input type="text" class="form-control form-in text-primary" wire:model="title" placeholder="Enter title" style="font-weight: bold; font-size: 2rem;">    
  </div>
    <div class="form-group">
  	<small class="form-text">Categoria</small>
    <select wire:model="category_id">
    	<option>Seleccione</option>
    	@foreach($categorys as $category)
    	<option value="{{$category->id}}">{{$category->name}}</option>
    	@endforeach
    </select>
  </div>
  <div class="form-group" align="center">
  	<small class="form-text text-muted">Description</small>
    <textarea type="password" rows="4"  cols="25" class="" autocomplete style="width: 100%:" wire:model="body"></textarea>
  </div>

  <div class="form-group">
  	<small class="form-text text-muted">Publicar</small>
    Si <input type="radio" wire:model="status"  value="1">
    No <input type="radio" wire:model="status"  value="0"> 
  </div>

  <div class="form-group">
        <label>Imagen</label>
        <input type="file" wire:model="file"  accept="image/*">
   </div>
   <!-- escuchar evento de abjuntar imagen para update -->
   <div>
    @if (!empty($file) && $filePost == '')
         <img src="{{ $file->temporaryUrl() }}" style="max-width: 100%;">    
    @elseif($factory == 1)
		 <img src="{{$filePost}}" width="150" height="190" alt="Imagen no disponible"> 
  	@else	  	    	
  		 <img src="{{ Storage::url("$filePost")}}" width="150" height="190" alt=" abjuntar imagen"> 	        
  	@endif
    
   </div>
</div>

