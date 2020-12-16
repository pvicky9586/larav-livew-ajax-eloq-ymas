@extends('layout')
@section('content')



 <div class= "container" align="center">
   
      	<div align="content" style="display: flex;">
      		<div>
      			<img src="{{asset('images/laravel-livewire.jpg')}}" width="500" height="450">
      		</div>
      		<div>
      			<img src="{{asset('images/eloquent.jpg')}}" width="400" height="400">
      		</div>
      	</div>

</div>
<div style="display: flex;">  

        <!-- GRUB --> 
       <div class="group">
       		<img src="{{asset('images/crub.png')}}" align="center" class="img-tam">  
       		<h2 class="display-5">CRUD</h2>          
       	  	<label>Cuando optamos a diseño de una API generalmete lo hacemos por la necesidad en registrar datos de en nuestra Base de datos. informacion que posterior mente necesitemos mostrar, actualizar y segun ser el caso eliminar. Ales traigo un pequeño ejercicio donde podra:</label>
          <details>
             <summary>incluye:</summary>
         		<div style="padding-left: 8%;">
         			<li>listar</li>
         			<li>Registrar</li>
         			<li>Actualizar</li> 
              <br>
               <a href="{{ route('crud_larav-livew')}}">Ejercicio</a>   			
         		</div>
          </details>
       </div>


      <!--SEARCH-->
      	<div class="group">
       		<img src="{{asset('images/search.png')}}"   class="img-tam">
        	<h2 class="display-5" align="left">Filtra </h2>
        	<label>Cuando tenemos demaciados registros en consulta a la Base de Datos, el filtrado resulta útil para ver únicamente los datos que deseeamos ver<br>
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
