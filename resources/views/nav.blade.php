<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'APP')</title>
</head>

<style>
    .active a {
        color:red;
        text-decoration: none;
    }
</style>
<body>
    <nav>
          
        <ul>
            
            <li class="{{request()->routeIs('home') ? 'active' : ''}}" > <a href=" {{route('home')}} ">Home</a></li>
            <li class="{{request()->routeIs('nosotros') ? 'active' : ''}}" > <a href=" {{route('nosotros')}} ">Nosotros</a></li>
            <li class="{{request()->routeIs('contacto') ? 'active' : ''}}" >  <a href=" {{route('contacto')}} ">Contactanos</a></li>
            <li class="{{request()->routeIs('portafolio.index') ? 'active' : ''}}" >  <a href="{{route('portafolio.index')}}  ">Portafolio</a></li>
    
            </li>
        </ul>
    </nav>

   @yield('content')
</body>
</html> 