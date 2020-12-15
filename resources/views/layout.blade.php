<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel/livewire & Eloquent</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">



        <!--style y escript de boostran-->
            
        
       
        <!-- Styles -->
   
      @livewireStyles


    
   <link href="{{ asset('styles.css') }}" rel="stylesheet">
<!--    <link href="{{ asset('menu.css') }}" rel="stylesheet"> -->
  <script( type="{{asset('menu.js')}}"></script>
    
    </head>
    <body>
      <nav class="navbar navbar-default navbar-ststic-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Larave - Livewire & Eloquent</a>
          </div>
          
        </div>
      </nav>
   
    <div class="container">
       @yield('content')
    </div>

       @livewireScripts

    

<!-- JS jquery, poppoer y bootstrap -->
   <!-- script de jquery y ajax-->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>



<script>
window.addEventListener('closeModal', event => {
    // $('#modalform').modal('hide')
    alert("Adios");
})
</script>



    </body>
</html>
