<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>

    <title> @yield('titulo' , 'inicio') </title>
</head>
<body>
   
    
    <x-menu/>
   <section class="seccion-principal" >
        
        @yield('banerpublicidad')
        <h2>
            @yield('titulocontenido')
        </h2>
       <article class="contenido">
           @yield("contenido")
       </article>

   </section>


</body>
</html>