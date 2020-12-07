@extends('layout')
@section('content')



 <div class= "container" align="center">
      	<h1 class="display-3" >Alcalnces</h1>
      
      	<div align="content" style="display: flex; ">
      		<div>
      			<img src="{{asset('images/laravel-livewire.jpg')}}">
      		</div>
      		<div>
      			<img src="{{asset('images/eloquent.jpg')}}" width="500" height="450">
      		</div>
      	</div>
</div>   	 
    <div style="display: flex; margin: 2%;">  
       <div class="prac">
       		<img src="{{asset('images/grub.png')}}">  
       		<h2 class="display-5">GRUD <small>incluye:</small></h2>
       		<label>Cuando optamos a diseño de una API generalmete lo hacemos por la necesidad en registrar datos de en nuestra Base de datos. informacion que posterior mente necesitemos mostrar, actualizar y segun ser el caso eliminar. Ales traigo un pequeño ejercicio donde podra:</label>
       		<div style="padding-left: 8%;">
       			<li>listar</li>
       			<li>Registrar</li>
       			<li>Actualizar</li>
       			<li>Eliminar</li>
       			<li>Buscar (Schear)</li>

       			
       		</div>
       		<a href="{{ route('grub')}}">Ver Ejercicio</a>
       </div>
       <div class="prac">
       		<img src="{{asset('images/count.jpg')}}"   width="700" height="300">
        	<h2 class="display-5" align="left">Filtra y/o contar registros</h2>
        	<label>Existen en MySQL funciones que nos permiten contar registros, calcular sumas, promedios, obtener valores máximos y mínimos, entre otros calculos. <br>

			Imaginemos que nuestra tabla "usuarios" contiene muchos registros y muchos usuarios han hecho publicaciones, a su vez esas publicaciones tienen comentarios.
			Para averiguar la cantidad sin necesidad de contarlos manualmente usamos la función "count()":<br>
       		<a href="{{ route('counts')}}" style="padding-left:20%;">Ver ejemplo</a>
       </div>
       <div  class="prac">
	      <img src="{{asset('images/menu.jpg')}}" width="700" height="300">
	       <label>Del diseño atractivo, organizado y bien estructurado dependera la imagen que de a tu pagina web. Por ende es imsporte que te organices y le heche ganas. <br>
	       Te traigo un ejemplo de un menu de tipo responsible y desegable. maximiza y minimizas el navegar para que le puedas</label>
	       <a href="{{ route('menu') }}" style="padding-left:20%;">Ejemplo</a>
	   </div>
	</div>
     
    <!--  
       <h2>registro de visitas</h2>
       <h2>comentarios</h2>
       <h2>Seccion de reportes</h2>
       <h2>importancia del orden y comentarios</h2>
       <h2>Mis </h2> -->


@endsection
