<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        <!--El favicon-->
        <link rel="icon" href="{{ asset("img/IconoLogo.png") }}">
        <title>@yield("title")</title>

        <!--CSS-->
        <link rel="stylesheet" href="{{ asset("css/index.css") }}">

    </head>

    <body id="body" >
        <!--Meter aqui el navbar-->
        <nav>

        <!--Apartado del user-->    

        </nav>
        
        
        @yield('content')
        <!--Footer-->
    <div class="card-footer mb-0" id="footer">
          <p class="text-black h6 text-center" >Copyright © 2023 Centre d'Estudis Politècnics. 
            Tots els drets reservats. Política de privacitat. Avís legal.</p>
    </div>


    </body>

</html>