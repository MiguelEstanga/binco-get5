<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>

    <title> @yield('titulo' , 'inicio') </title>
</head>
<body style="position: relative;">
   
    
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
   <x-footer/>

</body>
</html>