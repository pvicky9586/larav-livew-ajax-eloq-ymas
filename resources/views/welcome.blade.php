@extends('layout')
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
            <h1 align="center" class="text-success">Un medio rapido, practico y seguro</h1><br>
            <div>
              <a href="{{ url('/posts')}}">Crud con Laravel</a> 
            </div>
        </div> 
     

       <div class="group">
          <h2 class="display-3">Larave & Livewire</h2> 
       	 	<label style="font-size: 2rem;">Livewire llega para sorpendernos! en un gigantezco ahorro de tiempo y esfuerzo al consumir una Api <br> Sin mas preambulo! he creado una sencilla, completa y rapida Api. con los mismo datos del crub anterior, pero sin recargar la pagina
          </label>
          <div align="center">
            <a href="{{ route('crud_larav-livew')}}">Crud Livewire en laravel</a>   
          </div>	
       </div>


       <div class="group">
          <h2 class="display-3">Laravel & Ajax y Ventana Modal</h2>
          <label style="font-size: 2rem;">Ajax es una de las tecnologias mas rapida y segura en la interaccion con nuestra Base de Datos. <br>Te presentamos un CRUD de registros similar al anterior, pero esta vez enlazando ajax atraves de laravel y seguimos sumando + segurida y dinamismo(al no recargar la pagina)
          </label>      
          <br><br>
            <a href="{{ url('/post')}}">Crud con Ajax</a>   
        </div>
  </div>

</div>

<div style="display: flex;">
    <!--Public Post -->

    <div  class="group">
      <label>Publicaciones</label>
      <a href="{{ route('Public') }}">Post</a>
     </div>


      <!--SEARCH-->
      	<div class="group">
       		<img src="{{asset('images/search.png')}}"   class="img-tam">
        	<h2 class="display-5" align="left">Filtra </h2>
        	<label>Suponiendo que tenemos tenemos demaciados registros en nuestra Base de Datos. En este caso, el <b>filtrado </b> resulta útil por ser la via mas facil y rapida de ver únicamente los datos que nos interesa<br>
          La vista que se obtiene tras aplicar un filtro contiene solo aquellos registros que incluyen los valores seleccionados, mientras que el resto de los datos permanece oculto hasta que se borra el filtro.</label><br><br>
       		<a href="{{ route('search')}}" style="padding-left:20%;">Ver ejemplo</a>
       </div>

      
	<!--COUNT-->
 		<div class="group" style="width: 100;">
       		<img src="{{asset('images/count.jpg')}}"   align="container" class="img-tam">
        	<h2 class="display-5" align="left">Filtra y/o contar registros</h2>
        	<label>Existen en MySQL funciones que nos permiten contar registros, calcular sumas, promedios, obtener valores máximos y mínimos, entre otros calculos. 
          <br>
    			Imaginemos que nuestra tabla "usuarios" contiene muchos registros y muchos usuarios han hecho publicaciones, a su vez esas publicaciones tienen comentarios.
    			Para averiguar la cantidad sin necesidad de contarlos manualmente usamos la función "count()":</label><br>
       		<a href="{{ route('counts')}}" style="padding-left:20%;">Ver ejemplo</a>
    </div>


  <!--MENU -->
    <div  class="group">
	      <img src="{{asset('images/menu.jpg')}}" class="img-tam">
	       <label>Del diseño atractivo, organizado y bien estructurado dependera la imagen que de a tu pagina web. Por ende es imsporte que te organices y le heche ganas. <br>
	       Te traigo un ejemplo de un menu de tipo responsible y desegable. maximiza y minimizas el navegar para que le puedas</label>
         <div align="center">
         <details>
         <summary>Menus:</summary>
          <li>Menu normal</li>
          <li>Sub Menu</li>
          <li>Responsive</li>
          <li>de Amburquesa</li>

	         <a href="{{ route('menu') }}" style="padding-left:20%;">Ejemplo</a>

         </details>
         </div>
	   </div>

</div>

     





     
    <!--  
       <h2>registro de visitas</h2>
       <h2>comentarios</h2>
       <h2>Seccion de reportes</h2>
       <h2>importancia del orden y comentarios</h2>
       <h2>Mis </h2> -->


@endsection
