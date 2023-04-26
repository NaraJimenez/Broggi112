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
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
        <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
        <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins&display=swap" rel="stylesheet">

        <!--El favicon-->
        <link rel="icon" href="{{ asset("img/IconoLogo.png") }}">
        <title>@yield("title")</title>

        <!--CSS-->
        <link rel="stylesheet" href="{{ asset("css/index.css") }}">
        <link rel="stylesheet" href="{{ asset("css/carta1.css") }}">
        <link rel="stylesheet" href="{{ asset("css/carta2.css") }}">

        <!--Vite-->
        @vite(['resources/css/app.css', 'resources/css/app.scss', 'resources/js/app.js'])
    </head>

    <body id="body" >
        <!--Meter aqui el navbar-->
        <nav>

        <!--Apartado del user-->    

        </nav>
        
        
        @yield('content')
    
    <!--Footer-->
    <footer>
        <div class="text-center p-3">         
        <b>Copyright © 2023 Centre d'Estudis Politècnics.</b>  <br>
            Tots els drets reservats. Política de privacitat. Avís legal.
        </div>
    </footer>


    </body>

</html>