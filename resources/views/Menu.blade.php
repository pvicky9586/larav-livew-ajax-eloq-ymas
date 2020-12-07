@extends('layout')
@section('content')
    
<!--   <header>    
      <div class="menu_bar">
        <a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>
      </div>
    
      <nav>
        <ul>
          <li><a href="#"><span class="icon-house"></span>Inicio</a></li>
          <li><a href="#"><span class="icon-suitcase"></span>Trabajos</a></li>
          <li><a href="#"><span class="icon-rocket"></span>Proyectos</a></li>
          <li><a href="#"><span class="icon-earth"></span>Servicios</a></li>
          <li><a href="#"><span class="icon-mail"></span>Contactos</a></li>
        </ul>
      </nav>
    </header> -->

 <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
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

<a href="{{ route('inicio')}}"><img src="{{asset('images/irAtras.jpg')}}"   width="100" height="80" align="right">
</a>


<br><br>


 <style type="text/css">
      
      * {
        margin:0px;
        padding:0px;
      }
      
      #header {
        margin:auto;
        width:500px;
        font-family:Arial, Helvetica, sans-serif;
      }
      
      ul, ol {
        list-style:none;
      }
      
      .nav > li {
        float:left;
      }
      
      .nav li a {
        background-color:#000;
        color:#fff;
        text-decoration:none;
        padding:10px 12px;
        display:block;
      }
      
      .nav li a:hover {
        background-color:#434343;
      }
      
      .nav li ul {
        display:none;
        position:absolute;
        min-width:140px;
      }
      
      .nav li:hover > ul {
        display:block;
      }
      
      .nav li ul li {
        position:relative;
      }
      
      .nav li ul li ul {
        right:-140px;
        top:0px;
      }
      
    </style>

    <div id="header">
      <label>2do ejemplo de menu desplegable</label>
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