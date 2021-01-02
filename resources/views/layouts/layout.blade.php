<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scopes</title>                    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">   
        <link href="{{ asset('MyStyles.css') }}" rel="stylesheet">
    </head>
<body>
    <nav  class="navPers navbar navbar-ststic-top bg-viol" role="navigation">  
        <div class="">
           <h2 class="p-3 mb-2 bg-gradient-success display-5 text-write">
              Laravel - Livewire - AJAX & Eloquent
            </h2> 
            <div style="margin:0;"> 
              <span class="">                 
                <a class="text-warning h4" href="{{ route('inicio')}}">
                  <img src="{{asset('images/icons/home.png')}}" width="40" alt="  ">Home</a> 
              </span>
            </div>
        </div>
    </nav>



    <div class="" style="margin-left: 10%; margin-right:10%; ">
       @yield('content')
    </div>

       @livewireScripts

      <script type="text/javascript">
        //cierre de modal  con id="exampleModal"
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
      </script>

      <script type="text/javascript">
        //cierre de modal  con id="exampleModal"
        window.livewire.on('postStore', () => {
            $('#exampleModal').modal('hide');
        });
      </script>

 <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>

<!-- icons bootstrap 4 -->
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> 



  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  

   <script src="{{ asset('js/alert.js') }}"> </script>

  <script src="{{ asset('js/app.js') }}" defer></script>



</body>
</html>
