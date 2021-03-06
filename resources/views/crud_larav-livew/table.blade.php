
   

    @if (session('message'))
        <div class="alert alert-success">             
            <small>{{ session('message') }}  </small>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">             
            <small>{{ session('error') }}  </small>
        </div>
    @endif

<div>
  <!-- <input type="text" class="search-input"  class="form-control" style=" width: 100%;" wire:model="searchPart"  placeholder="Buscar" >      -->      
   
                      
    <table class="table" >           
        <thead class="thead-dark">          
        <tr align="center"> 
            <th class="text-center" >Title</th>
            <th class="text-center">Body</th>
            <th colspan="2">&nbsp; Accion</th>
        </tr>
    </thead>
    <tbody>
  
        @forelse ($posts as $post)
            <tr>
                <td class="display-5 text-center">{{ $post->title }}</td>
                <td  class="text-muted" style="padding-right: 4%; text-align: justify;"> 
                              <?php $tam = strlen($post->body); 
                                if ($tam <= 80){
                                    echo $post->body;
                                }else{ 
                                    echo substr($post->body, 0, 80);
                                    echo '<b>...</b>';
                                }                   
                              ?>
                </td>
                <td>
                    <button class="btn btn-success" wire:click="edit({{ $post->id }})">Editar
                    </button>
                </td>
               
                <td>
                    <button class="btn btn-danger" wire:click="destroy({{ $post->id }})">Eliminar
                    </button> 

                </td>
             @empty
            <td class="text-danger font text-center">No hay resultados</td>
        </tr>               
        @endforelse
    </tbody>
</table>
    <div style="color:blue;">
        {{ $posts->links() }}
    </div>



</div>