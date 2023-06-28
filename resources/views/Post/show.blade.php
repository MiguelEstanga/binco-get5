<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <title>  {{ $post->titulo }}</title>
</head>
  <style>
  

      body{
        font-family: cursive;
        font-size: 1rem;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        background-image: url("../fondo.jpg") ;
      }

      .container{
        margin: auto;
        max-width: 1315px;
        padding: 10px;
        margin-top: 1rem;
        display: grid;
        grid-template-columns: 65% 35%;
      }
      .usuario-baner{
        max-width: 500px;
       
        min-height:400px ;
        position: relative;
        top:71px;
       }

       @media (max-width:1230px) {
         .container{
            grid-template-columns: 75% 25%;
         }

        .baner-publicacion{
         
              max-width: 50rem;
           height: 50rem;
          padding: 0;
        }
       }


       @media (max-width:1136px) {
         .container{
            grid-template-columns:repeat(1, 1fr);
         }

        .baner-publicacion{
         
              max-width: 50rem;
              height: 50rem;
              padding: 0;
        }

        .usuario-baner{
          display: none;
        }


       }
  </style>
<body>
    <x-menu/>
 
    <x-banerhorizontal type="true" :categoria="$post->categorias->id" />       
       
      <div class="container">

            <x-baner-publicacion  :admin="false"  :post="$post" />
            <x-usurio-show-baner  :post="$post"  :masposter="$masposter" />

            
      </div>  


</body>
</html>