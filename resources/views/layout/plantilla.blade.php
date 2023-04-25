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

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    @yield('css-pagina')
</head>
<body> 
    <div id="Menu">
        
    </div>
    <div id="Profile" class="profile">
        {{-- @if (Auth::check() && Auth::$user()->rol->nombre == 'Administrador')
        <div>
            <span>{{ $user }}</span>
            <span>{{ $userRol }}</span>
            <div id="menuA" >
            
            </div>
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

</body>
</html>

