<!DOCTYPE html>
<!-- hecho por Miguel Alejandro Estanga Maritinez para ti abuelita siempre te voy amar <3  -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>

    <title> @yield('titulo' , 'inicio') </title>
</head>
<body style="position: relative;">
   
    
   <x-menu/>
   @yield('banerhorizontal')
 
  
    @yield('categorias')
    @yield('publicidad')
 
   @yield("subcategorias")

   <section class="seccion-principal"  >
        
      
           @yield("contenido")
      

   </section>
   <div class="paginate">
         @yield('paginate')
   </div>
 
   
   <!--x-footer/--> 
  

</body>
</html>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
  <style>
 
  </style>