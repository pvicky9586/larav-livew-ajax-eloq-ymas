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

<style type="text/css">
  


/*

/*MENU 1*/
/* header {
  width:100%;
  padding: 10px;
  background: #000;
}
 
header nav {
  width:90%;
  max-width:1000px;
  margin:20px auto;
}
 
.menu_bar {
  display:none;
}
 
header nav ul {
  overflow:hidden;
  list-style:none;
}
 
header nav ul li {
  float:left;
}
 
header nav ul li a {
  color:#fff;
  padding:20px;
  display:block;
  text-decoration:none;
  font-size:1rem;
}
 
header nav ul li span {
  margin-right:10px;
}
 
header nav ul li a:hover {
  background:#037E8C;
  text-decoration: none;
}
 
section {
  padding:20px;
}

 
@media screen and (max-width:800px ) {
  header nav {
    width:80%;
    height:100%;
    left:-100%;
    margin:0;
    position: fixed;
  }
 .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
}

  header nav ul li span{
    display:block;
    float:none;
    border-bottom:1px solid rgba(255,255,255, .3);
  }
 
  .menu_bar {
    display:block;
    width:100%;
    background:#ccc;
  }
 
  .menu_bar .bt-menu {
    display:block;
    padding:20px;
    background:#024959;
    color:#fff;
    text-decoration:none;
    font-weight: bold;
    font-size:25px;
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
  }
 
  .menu_bar span {
    float:right;
    font-size:40px;
  }
}






 /* 2do MENU 
 Add a black background color to the top navigation */
/*.topnav {
  background-color: #333;
  overflow: hidden;
}
*/
/* Style the links inside the navigation bar */
/*.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}*/

/* Change the color of links on hover */
/*.topnav a:hover {
  background-color: #ddd;
  color: black;
}
*/
/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
/*.topnav .icon {
  display: none;
}*/
 /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
/*@media screen and (max-width: 800px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}*/

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
/*@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
} 
*/






/*menu desplegable*/ 
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