@extends('layout')
@section('content')
    <!-- MENU 1 -->
    <label>MENU responsive a los 800 media query</label>  
  <header>  
   
      <div class="menu_bar">
        <a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>
      </div>
    
      <nav>
        <ul>
          <li>
            <a href="#"><span class="icon-house"></span>Inicio</a>
          </li>
          <li>
            <a href="#"><span class="icon-suitcase"></span>Trabajos</a>
          </li>
          <li>
            <a href="#"><span class="icon-rocket"></span>Proyectos</a>
          </li>
          <li>
            <a href="#"><span class="icon-earth"></span>Servicios</a>
          </li>
          <li>
            <a href="#"><span class="icon-mail"></span>Contactos</a>
          </li>
        </ul>
      </nav>
    </header>

    <BR><BR>

<!-- MENU 2 -->
 <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
 <label>MENU amburgueza a los 800 media query</label> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div> 



<!-- IR ATRAS -->
<a href="{{ route('inicio')}}"><img src="{{asset('images/irAtras.jpg')}}"   width="100" height="80" align="right">
</a>


<br><br>




    <div id="header">
      <label>Menu desplegable</label>
      <ul class="nav">
        <li><a href="">Inicio</a></li>
        <li><a href="">Servicios</a>
          <ul>
            <li><a href="">Submenu1</a></li>
            <li><a href="">Submenu2</a></li>
            <li><a href="">Submenu3</a></li>
            <li><a href="">Submenu4</a>
              <ul>
                <li><a href="">Submenu1</a></li>
                <li><a href="">Submenu2</a></li>
                <li><a href="">Submenu3</a></li>
                <li><a href="">Submenu4</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="">Acerca de</a>
          <ul>
            <li><a href="">Submenu1</a></li>
            <li><a href="">Submenu2</a></li>
            <li><a href="">Submenu3</a></li>
            <li><a href="">Submenu4</a></li>
          </ul>
        </li>
        <li><a href="">Contacto</a></li>
      </ul>
    </div>




@endsection