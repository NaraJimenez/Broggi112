<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <script src="https://kit.fontawesome.com/ed77576707.js" crossorigin="anonymous"></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
<script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    @yield('css-pagina')
</head>
<body> 
    <div id="Menu">
        
    </div>
    <div id="Profile" class="profile">
        @if (Auth::check() && $user->tipus_usuaris_id == 2)
        <div>
            <span>{{ $user->nom }}</span>
            <span>Administrador</span>
            <div id="menuA" ></div>
        </div>
           
        @endif

        @if (Auth::check())
        <div>
            <span>{{ $user->nom }}</span> 
                <span>{{ $user->tipus_usuaris_id }}</span>
        
            <div id="Menu">
        
            </div>
        </div>   
        @endif
    </div>

    @yield('content')
    @yield('scripts')
    <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
</body>
</html>

