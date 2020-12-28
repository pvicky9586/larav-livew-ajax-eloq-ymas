@extends('layouts.layout')
@section('content')



   <div  align="center">
        <img src="{{asset('images/Larav-Lavew-Ajax-Eloq.png')}}">
  </div>

<div style="display: flex;">
          <img src="{{asset('images/crud.png')}}" class="crud">

  <div style="display: inline-block;">  
        <div class="group">
          <h2 class="display-3">Just Laravel</h2> 
            <label style="font-size: 2rem;">Cuando necesitamos insertar, editar e incluso hasta eliminar registros de nuestra Base de Datos; no es necesario, entonces conocer y dominar la herramienta que nos podria facilitar este trabajo. orientados siempre a la facilidad del cliente</label>
            <h1 align="center" class="text-success">Un medio rapido, practico y seguro</h1>
            <div>
              <a href="{{ url('/posts')}}">Crud con Laravel</a> 
            </div>
        </div> 
     

       <div class="group">
          <h2 class="display-3">Larave & Livewire</h2> 
       	 	<label style="font-size: 2rem;">Livewire llega para sorpendernos! en un gigantezco ahorro de tiempo y esfuerzo al consumir una Api <br> Sin mas preambulo! he creado una sencilla, completa y rapida Api. con los mismo datos del crub anterior, pero sin recargar la pagina
          </label>
          <div>
            <a href="{{ route('crud_larav-livew')}}">Crud Livewire en laravel</a>  &nbsp;&nbsp;&nbsp;
            <a href="{{ url('users')}}">Utilizando ventana Modal/Model User</a>  

          </div>	
       </div>






       <div class="group">
          <h2 class="display-3">Laravel & Ajax y Ventana Modal</h2>
          <label style="font-size: 2rem;">Ajax es una de las tecnologias mas rapida y segura en la interaccion con nuestra Base de Datos. <br>Te presentamos un CRUD de registros similar al anterior, pero esta vez enlazando ajax atraves de laravel y seguimos sumando + segurida y dinamismo(al no recargar la pagina)
          </label>      
          <br>
            <a href="{{ url('/post')}}">Crud con Ajax</a>   
        </div>
  </div>
</div>
      
  <!--Public Post -->
  <div  class="group text-center">
      <h2 class="display-3  text-success">Publicaciones</h2>
      <a href="{{ route('Public') }}">ver/publicar</a>
  </div>


<div style="display: flex;">
    <!--SEARCH-->
    <div class="img-tam-2 group ">
          
            
         
      		
        	
            <label><b class="display-3 text-center">Search</b><br><i>Suponiendo que tenemos demaciados registros en nuestra Base de Datos.</i> En este caso, ¡el <b>filtrado 0 search</b> en ingles, resulta ser la via mas facil y rapida de ver únicamente los datos que nos interesa!</label>
              <details>
                <summary>mas...</summary>
                  La vista que se obtiene tras aplicar un filtro contiene solo aquellos registros que incluyen los valores seleccionados, mientras que el resto de los datos permanecen oculto hasta que se borra el filtro.<br>
                 <a href="{{ route('search')}}">Ver ejemplo</a>
              </details>
      </div>        
    


      
	<!--COUNT-->
 		<div class="group">
       		<img src="{{asset('images/count.jpg')}}" class="img-tam">
        	<h1>Contado registros</h1>
        	<span>Existen funciones  aplicadas  a Mysql que nos permiten contar registros, hacer calculos aritmeticos, logico y de comparacion, entre otras... 
          </span>         
        <details align="center">
          <summary>mass...</summary>
    			Imaginemos que en nuestra tabla <b><i>'usuarios'</i></b> contiene muchos registros y muchos usuarios han hecho publicaciones, a su vez esas publicaciones tienen comentarios.
    			Para averiguar la cantidad sin necesidad de contarlos manualmente usamos la función "count()":<br>
       		<a href="{{ route('counts')}}">Ejemplo</a>
        </details>
    </div>


  <!--MENU -->
    <div  class="group">
	      <img src="{{asset('images/menu.jpg')}}" class="img-tam">
        <h1>Menus</h1>
	       De un diseño atractivo, organizado y bien estructurado dependera la imagen que des a tu pagina web. <b>Organizate y ponle ganas</b>, <i>porque mucho dependera de tu creatividas!</i>
         <div style="margin-left: 5%;">
	       <details>
           <summary>Menus</summary> <!--abrir enlaces en otra pestaña-->
            <li>Menu normal</li> 
            <li>Desplegable</li>
            <li>Responsive</li>
            <li>de Amburquesa</li>
           <!--  <a href="{{ route('menu') }}" style="padding-left:20%;">Ejemplo</a> -->
         </details>
         </div>
	 </div>

</div>




@endsection
