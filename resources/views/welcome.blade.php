@extends('layouts.layout')
@section('content')



  <div  align="center">
        <img src="{{asset('images/Larav-Lavew-Ajax-Eloq.png')}}" width="1000">
  </div>
<div style="display: flex;">
        <img src="{{asset('images/crud.png')}}" class="crud-img" width="180">

  <div style="display: inline-block;">  
        <div class="group">
          <h2 class="display-4">Just Laravel</h2> 
          <label class="text-crud"> Para insertar, editar e incluso hasta eliminar registros de nuestra Base de Datos; no es necesario entonces, conocer y dominar la herramienta que nos podria facilitar este trabajo. sin ignorar! lo esperado por el cliente <a href="{{ url('/posts')}}">ejemplo</a></label>
          <h1 align="center" class="text-success display-5">Un medio rapido, practico y seguro</h1>
                          
           
        </div> 
        <div class="group">
          <h2 class="display-4">Larave & Livewire</h2> 
       	 	<label class="text-crud">Livewire llega para sorpendernos! en un gigantezco ahorro de tiempo y esfuerzo a la hora de consumir una Api. <br><i><b>Sin mas preambulo!</b> Un Ejemplo de una sencilla, completa y rapida Api. con los mismo datos del crub anterior, pero esta vez! sin recargar la pagina.</i></label>         
          <div class="display-5">
            <a href="{{ route('crud_larav-livew')}}">Livewire en laravel</a>  &nbsp;&nbsp;&nbsp;
            <a href="{{ url('users')}}">Usando Modal <i style="font-size: 1rem; color: black;">> Model User </i></a>  
          </div>	
       </div>

       <div class="group">
          <h2 class="display-4">Laravel & Ajax</h2>
          <label class="text-crud ">Ajax es una de las tecnologias mas rapida y segura en la interaccion con nuestra Base de Datos. <br>Te presentamos un CRUD de registros similar al anterior, pero esta vez enlazando ajax atraves de laravel y seguimos sumando + segurida y dinamismo(al no recargar la pagina)
          <a href="{{ url('/post')}}" class="display-5">ejemplo</a>   </label>      
          
        </div>
  </div>
</div>


  <!--Public Post -->
}
<div  class="text-center rounded-bottom">
    <img src="{{asset('images/public.jpeg')}}" class="img-tam">
      <a href="{{ route('Public') }}"><h2 class="display-3  text-success">Publicaciones</h2></a>
</div>


<div style="display: flex;">
    
    <!--SEARCH-->
  <div class="img-tam-2 group ">        	
       <span class="display-4 text-center">Search</span><br>
       <label class="display-5"><i>Suponiendo que tenemos demaciados registros en nuestra Base de Datos.</i> En este caso, ¡el <b>filtrado 0 search</b> en ingles, resulta ser la via mas facil y rapida de ver únicamente los datos que nos interesa!</label>
        <a href="{{ route('search')}}">ejemplo</a>
        <details>
          <summary>mas...</summary>
          La vista que se obtiene tras aplicar un filtro contiene solo aquellos registros que incluyen los valores seleccionados, mientras que el resto de los datos permanecen oculto hasta que se borra el filtro.<br> 
        </details>
      </div>        
    


      
	<!--COUNT-->
 		<div class="img-tam-3 group">
         		
        <span class="display-4 text-center">Count()</span> <br>
          <label>Existen funciones  aplicadas  a Mysql que nos permiten contar registros, hacer calculos aritmeticos, logico y de comparacion, entre otras... </label>
          
          <a href="{{ route('counts')}}">Ejemplo</a>      
        <details align="center">
          <summary>mass...</summary>
    			Imaginemos que en nuestra tabla <b><i>'usuarios'</i></b> contiene muchos registros y muchos usuarios han hecho publicaciones, a su vez esas publicaciones tienen comentarios.
    			Para averiguar la cantidad sin necesidad de contarlos manualmente usamos la función "count()":<br>
       </details>
      
    </div>


  <!--MENU -->
    <div  class="group">
	      <img src="{{asset('images/menu.jpg')}}" class="img-tam" width="200">
         <span class="display-4 text-center">Menu</span><br>
	      <label>De un diseño atractivo, organizado y bien estructurado dependera la imagen que des a tu pagina web. <b>Organizate y ponle ganas</b>, <i>porque mucho dependera de tu creatividas!</i></label> 
         <div style="margin-left: 5%;">
	       <details>
           <summary>Menus</summary>
            <li>Menu normal</li> 
            <li>Desplegable</li>
            <li>Responsive</li>
            <li>de Amburquesa</li>
           <!--  <a href="" style="padding-left:20%;">Ejemplo</a> -->
         </details>
         </div>
	 </div>

</div>

@endsection