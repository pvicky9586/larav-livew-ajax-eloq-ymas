@extends('layout')
@section('content')



   <div  align="center">
     
        	<div align="content" class= "container" style="display: flex; margin-top: 3%;">
        		<div>
        			<img src="{{asset('images/laravel-livewire.jpg')}}" width="500" height="250">
        		</div>
        		<div>
        			<img src="{{asset('images/eloquent.jpg')}}" width="400" height="250">
        		</div>
        	</div>

  </div>
<div style="display: flex;">  

        <!-- GRUB --> 
       <div class="group">
          <h2 class="display-5">CRUD  con Livewire</h2> 
       		<img src="{{asset('images/crub.png')}}" align="center" class="img-tam">  
       		         
       	  	<label style="font-size: 2rem;">Cuando necesitamos insertar, editar; registros en una Base de Datos. Es alli entonces donde requerimos dominar la mejor herramienta que nos podria facilitar este trabajo. orientada siempre a la facilidad del cliente (rapido, practico y seguro)
            </label>
          <details>
             <summary>Crud -- incluye:</summary>
         		<div style="padding-left: 8%;">
         			<li>listar</li>
         			<li>Registrar</li>
         			<li>Actualizar</li> 
              <li>Eliminar</li> 
              <br>
               <a href="{{ route('crud_larav-livew')}}">Ejercicio</a>   			
         		</div>
          </details>
       </div>


            <!-- GRUB --> 
       <div class="group">
          <h2 class="display-5">CRUD con Ajax y ventana Modal</h2> 
          <img src="{{asset('images/crud-ajax.png')}}" align="center" class="img-tam">  
                   
            <label style="font-size: 2rem;">Ajax es una de las tecnologias mas rapida y segura en la interaccion con nuestra Base de Datos. <br>Te presentamos un CRUD de registros similar al anterior, pero esta vez enlazando ajax atraves de laravel
            </label>      
              <br><br>
               <a href="http://127.0.0.1:8000/post">Ejercicio</a>         
            
      
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
</div>





<div style="display: flex;">
  <!--MENU -->
    <div  class="group">
	      <img src="{{asset('images/menu.jpg')}}" class="img-tam">
	       <label>Del diseño atractivo, organizado y bien estructurado dependera la imagen que de a tu pagina web. Por ende es imsporte que te organices y le heche ganas. <br>
	       Te traigo un ejemplo de un menu de tipo responsible y desegable. maximiza y minimizas el navegar para que le puedas</label>
         <details>
         <summary>Menus:</summary>
          <li>Menu normal</li>
          <li>Sub Menu</li>
          <li>Responsive</li>
          <li>de Amburquesa</li>

	         <a href="{{ route('menu') }}" style="padding-left:20%;">Ejemplo</a>

         </details>
	   </div>

     <div  class="group">
         <label>Publicaciones</label>
                     <a href="{{ route('posts') }}">Post</a>
     </div>
     <div><a href="">crud de laravel y ajax</a></div>
	</div>



     
    <!--  
       <h2>registro de visitas</h2>
       <h2>comentarios</h2>
       <h2>Seccion de reportes</h2>
       <h2>importancia del orden y comentarios</h2>
       <h2>Mis </h2> -->


@endsection
