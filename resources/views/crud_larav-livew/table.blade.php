
   

    @if (session('mensaje'))
        <div class="alert alert-success">             
            <small>{{ session('mensaje') }}  </small>
        </div>
    @endif
<div  >
  <input type="text" class="search-input"  class="form-control" style=" width: 100%;" wire:model="searchPart"  placeholder="Buscar" >           
   
                      
    <table class="table" >           
        <thead class="thead-dark">          
        <tr align="center"> 
            <th class="text-center" >Title</th>
            <th class="text-center">Body</th>
            <th colspan="2">&nbsp; Accion</th>
        </tr>
    </thead>
    <tbody>
  
        @foreach ($posts as $post)
            <tr>
                <td class="display-3">{{ $post->title }}</td>
                <td class="">{{ $post->body }}</td>
                <td>
                    <button class="btn btn-success" wire:click="edit({{ $post->id }})">Editar
                    </button>
                </td>
               
                <td>
                    <button class="btn btn-danger" wire:click="destroy({{ $post->id }})">Eliminar
                    </button> 
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    <div style="color:blue;">
        {{ $posts->links() }}
    </div>



</div>