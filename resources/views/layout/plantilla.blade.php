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
        {{-- @if (Auth::check() && Auth::user()->rol == '2')
        <div>
            <span>{{ Auth::user()->name }}</span>
            <span>{{ session('rol') }}</span>
            <div id="menuA" ></div>
        </div>
           
        @endif

        @if (Auth::check())
        <div>
            {{ Auth::user()->nombre }} {{ Auth::user()->rol }}
        
            <div id="Menu">
        
            </div>
        </div>   
        @else 
        <a href="{{ url('/logout') }}"
        @endif --}}
    </div>

    @yield('content')
    @yield('scripts')
    <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
</body>
</html>

