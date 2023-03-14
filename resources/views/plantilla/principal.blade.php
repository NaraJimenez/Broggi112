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

    <body id="body">
        <!--Meter aqui el navbar-->
        <!--Apartado del user-->
        <nav class="navbar fixed-top navbar-light">
            <div class="collapse navbar-collapse navbar-left"  id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li class="active"><a href="#">Home</a></li>
                   <li><a href="#">About</a></li>
                   <li><a href="#">Contact</a></li>
                </ul>
             </div>
          </nav>
        <!--Footer-->
        


    </body>

</html>